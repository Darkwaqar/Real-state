<?php
namespace App\Http\Controllers;

use App\Events\UserNotification;
use App\Mail\AgentProfileLeadEmail;
use App\Models\AgentLeads;
use App\Models\AgentTeam;
use App\Models\Properties;
use App\Models\PropertyLeads;
use App\Models\QueryModel;
use App\Models\UserEducations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Reviews;
use App\Models\SaveSearches;
use App\Models\ScheduleTour;
use App\Models\User;
use App\Models\WalletCredit;
use App\Models\WalletDebit;
use Carbon\Carbon;

class AgentController extends Controller
{
    public function index()
    {
    }

    public function addLead(Request $request){
        $data = $request->all();
        //$userData = Auth::user();
        $userData = getuuserdata($data['agent_id']);
           $leads = AgentLeads::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'question' => $data['question'],
                'agent_id' => $data['agent_id'],
                'lead_type' => $data['lead_type'],
            ]);
            $data['type'] = 'Agent Lead';
            $data['time'] = Carbon::now();
            $agent = User::where('id', $data['agent_id'])->first()->toArray();
            $data['message'] = $data['name'].' Just contacted agent '.$agent['first_name'];
            $data['link'] = url('admin/agent-leads/'.$agent['id']);
            $link = 'admin/agent-leads/'.$agent['id'];
            if (isUserLoggedIn()) {
                $data['path'] = asset('public/images/userdp/');
                $data['user'] = User::where('id', getUserId())->first()->toArray();
                createNotification(getUserId(),$data['question'],$data['name'].' Just contacted agent '.$agent['first_name'],'Agent Lead',null,$agent['id'],null,$link);

              }else {
                $data['user'] = '';
                $data['path'] = '';
                createNotification(null,$data['question'],$data['name'].' Just contacted agent '.$agent['first_name'],'Agent Lead',null,$agent['id'],null,$link);
              }
            event(new UserNotification($data));
            if (isset($userData) && isset($userData[0]) && $userData[0]['email']) {
                Mail::to($userData[0]['email'])->send(new AgentProfileLeadEmail($data));
            }
            return redirect()->back()->withSuccess('Your inquiry has been submitted, our agent will contact you soon!');

    }
    public function addReviews(Request $request){
        // Validate the request data
        $validatedData = $request->validate([
          'agentId' => 'required|exists:users,id',
          'selectedRating' => 'required|integer|min:1|max:5',
          'message' => 'required|string|max:1000',
      ]);
        // dd($validatedData);
      $data = [];
      $review = Reviews::create([
            'agent_id' => $validatedData['agentId'],
            'user_id' => getUserId(), // Assuming the current user is the reviewer
            'rating' => $validatedData['selectedRating'],
            'content' => $validatedData['message'],
            'created_at' => now(),
        ]);

        if ($review) {
            $data['return'] = true;
            $data['success'] = "Review Submitted Successfully!";
            $data['data'] = $review;
            $data['type'] = 'Agent Review';
            $data['time'] = Carbon::now();
            $data['path'] = asset('public/images/userdp/');
            $data['user'] = User::where('id', getUserId())->first()->toArray();
            $agent = User::where('id',$validatedData['agentId'])->first()->toArray();
            $data['link'] = url('admin/reviewslist/'.$agent['id']);
            $link = 'admin/reviewslist/'.$agent['id'];
            $data['message'] = 'User ('.Auth::user()->first_name. ') reviewed an agent '.$agent['first_name'];
            $data['review'] = Reviews::with('reviewByAgent')->where('id',$review->id)->first()->toArray();
            createNotification(getUserId(),$validatedData['message'],'User ('.Auth::user()->first_name. ') reviewed an agent '.$agent['first_name'],'Agent Review',null,$agent['id'],null,$link);
            event(new UserNotification($data));
        } else {
            $data['return'] = false;
            $data['message'] = "Review Not Submitted!";
        }
        return response()->json($data);
    }

    public function hamzaDashboard(){

         $data['agentQueries'] = QueryModel::agentQueries();
        // dd($data);
        $data['leads'] = QueryModel::agentLeads();
        //dd($data['leads']);
        $data['userInquiries'] = AgentLeads::where('agent_id', getUserId())
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->get()
            ->toArray();
            //dd($data['userInquiries']);
        $data['userProperties'] = Properties::where(function ($query) {
            $userId = getUserId();
            $fullName = Auth::user()->first_name . ' ' . Auth::user()->last_name;
            
            $query->where('user_id', $userId)
                ->orWhere('ListAgentFullName', $fullName);
        })
        ->with('propertyDetail','prefferedMedia','StructureType','userProperties')
        ->get()
        ->toArray();
             //dd($data['userProperties']);
        $data['propertyLeads'] = PropertyLeads::with('lead_purchased')->orderBy('id', 'desc')->get();
        // dd($data['propertyLeads']);
        $data['myPropertyLeads'] = WalletDebit::where('agent_id', getUserId())->with('Lead')->orderBy('created_at', 'desc')->get();
        //dd($data['myPropertyLeads']);
        $data['walletTransactionsHistory'] = WalletCredit::where('agent_id', getUserId())->get();
        $wallet = new WalletController;
        $data['totalBalance'] = $wallet->total_balance();
        $data['myLeads'] = WalletDebit::where('agent_id', Auth::user()->id)->count();
        $data['myProperties'] = Properties::where(['PropertyStatus' => 1, 'user_id' => getUserId()])->count();
        $data['myPendingProperties'] = Properties::where(['PropertyStatus' => 2, 'user_id' => getUserId()])->count();
        $data['inquiries'] =  ScheduleTour::with('propertyTour')->where('seller_id', '=', getUserId())->get();
        $data['scheduleLeads'] =  ScheduleTour::with('propertyTour', 'lead_purchased')->orderBy('created_at', 'desc')->get();
        $data['savedSearches'] = SaveSearches::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
        $data['userCity'] = json_encode(Auth::user()->address);
        $data['agentTeams'] = AgentTeam::teams();
        return view('users.hamzadashboard', $data);
    }

    public function hamzaUserDashboard(){
        return view('users.hamza-user-dashboard');
    }
}

