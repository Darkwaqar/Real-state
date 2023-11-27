<?php
namespace App\Http\Controllers;

use App\Events\UserNotification;
use App\Mail\AgentProfileLeadEmail;
use App\Models\AgentLeads;
use App\Models\UserEducations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Reviews;
use App\Models\User;
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
}

