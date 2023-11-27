<?php



namespace App\Http\Controllers;

use App\Jobs\SendEmailListingApprove;
use App\Jobs\TicketUpdateJob;
use App\Mail\AgentActivation;
use App\Mail\ListingApprove;
use App\Mail\SflUserApprove;
use App\Models\AgentLeads;
use App\Models\Complaint;
use App\Models\ComplaintStatus;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\Notifications;
use App\Models\Properties;
use App\Models\PropertyAppliances;
use App\Models\PropertyLeads;
use App\Models\PropertyMessageBox;
use App\Models\PropertySchedule;
use App\Models\QueryModel;
use App\Models\Reviews;
use App\Models\ScheduleTour;
use App\Models\Suggestions;
use App\Models\User;
use App\Models\WalletCredit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('working..');
        $data['totalAgents'] = User::where('role_id', 2)->count();
        $data['notifications'] = json_encode(Notifications::where('is_read', 0)->take(5)->get());


        return view('admins.home', $data);
    }
    public function home()
    {
        //dd('working..');
        $data['totalAgents'] = User::where('role_id', 2)->count();
        $data['totalUser'] = User::where('role_id', 5)->count();
        $data['leads']      = PropertyLeads::count();
        $data['tour']      = PropertySchedule::count();
        $data['contact']      = PropertyMessageBox::count();
        //dd($data);
        return view('admins.home', $data);
    }
    public function login()
    {
        return view('admins.login');
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return to_route('adminLogin');
    }

    public function properties(Request $request)
    {
        $data['propertiesAPI'] = $this->filterForApiProperty($request);
        //dd($data['propertiesAPI']);
        return view('admins.properties', $data);
    }

    public function newsletter()
    {
        $data['newsletter'] = Newsletter::orderBy('created_at', 'desc')->paginate(1000);
        //dd($data['propertiesAPI']);
        //dd($data);
        return view('admins.newsletter', $data);
    }

    private function filterForApiProperty($request)
    {
        $property = Properties::with('propertyDetail', 'StructureType'); //->simplePaginate(50); //->where($filters)->simplePaginate(50);
        if (!empty($_GET)) {
            $search =  $request['s'];
            $city =  $request['city'];
            $year =  $request['year'];
            if (isset($search) && !empty($search)) {
                $property->where('ListAgentFullName', 'like', '%' . $search . '%')->orWhere('PropertyName', 'like', '%' . $search . '%');
            }
            if (isset($request->type) && !empty($request->type)) {
                $property->whereHas('StructureType', function ($query) use ($request) {
                    $query->where('StructureTypeName', $request->type);
                });
            }
            if (isset($city) && !empty($city)) {
                $property->where('CityName', $city);
            }
            if (isset($year) && !empty($year)) {
                $property->whereYear('OriginatingSystemModificationTimestamp', $year);
            }
        }
        return $property->simplePaginate(100);
    }
    public function featuredPro(Request $request)
    {
        $data['propertiesAPI'] = QueryModel::FeaturedProperties($request);
        return view('admins.featuredPro', $data);
    }

    public function acceptlisting(Properties $property)
    {
        $property->admin_id = getAdminId();
        $property->PropertyStatus = 1;
        if ($property->save()) {
            $allData = $property->load('userProperties')->toArray();
            if (isset($allData)) {
                $data['email'] = $allData['user_properties'][0]['email'];
                Mail::to($data['email'])->send(new ListingApprove($allData));
            }
            setFlashData(
                'alert-success',
                'You Have successfully approved the perperty.',
                redirect()->route('adminFeaturedProperties')
            );
        } else {
            setFlashData(
                'alert-primary',
                'You can\'t update the perperty right now.',
                redirect()->route('adminFeaturedProperties')
            );
        }
    }

    public function propertyinner(Properties $property)
    {
        $data['property'] = $property->load('propertyDetail')
            ->load('WaterSource')
            ->load('ParkingFeature')
            ->load('PropertyRoof')
            ->load('PropertyView')
            ->load('Utilities')
            ->load('ExteriorFeaturs')
            ->load('Interior')
            ->load('StructureType')
            ->load('media')
            ->load('basement')
            ->load('propertyFlooring')
            ->load('mlsRooms')
            ->load('featuredRoom')
            ->load('ArchitecturalStyle')
            ->load('CommunityFeatures')
            ->load('appliances')
            ->load('outdoorAmenities')
            ->load('coolingTypes')
            ->load('heatingTypes')
            ->load('heatingFuel');

        return view('admins.propertyinner', $data);
    }

    public function agentleads($id)
    {

        $data['Leads'] = AgentLeads::with('user')->where('agent_id', $id)->orderBy('created_at', 'DESC')->paginate(10);
        //dd($data['Leads']);
        return view('admins.agentleads', $data);
    }

    public function sethqueries()
    {
        $data['sethData'] = PropertyMessageBox::with('user')
            ->with('property')
            ->paginate(10); // 10 records per page/
        return view('admins.sethqueries', $data);
    }

    public function property_tour_scheduled()
    {
        $data['propertyScheduledData'] = PropertySchedule::with('user')
            ->with('property')
            ->paginate(10); // 10 records per page/
        return view('admins.propertySchedule', $data);
    }


    public function agentonboard(Request $request)
    {
        $agents['agents'] = QueryModel::agents($request);
        //dd($agents);
        return view('admins.agentonboard', $agents);
    }

    public function agentinquiries()
    {
        return view('admins.agentinquiries');
    }

    public function leaderleads()
    {
        return view('admins.leaderleads');
    }

    public function leaderboard()
    {
        return view('admins.leaderboard');
    }

    public function leaderinquiries()
    {
        return view('admins.leaderinquiries');
    }


    public function loanleads()
    {
        return view('admins.loanleads');
    }

    public function loanofficers(Request $request)
    {
        $loanOfficer['loanOfficer'] = QueryModel::loanOfficer($request);
        return view('admins.loanofficers', $loanOfficer);
    }
    public function loaninquiries()
    {
        return view('admins.loaninquiries');
    }

    public function usersignedup(Request $request)
    {
        $data['userData'] = $this->filterforUsers($request);
        return view('admins.users.usersignedup', $data);
    }

    private function filterforUsers($request)

    {
        $allusers = User::withTrashed()->with('role')->whereHas('role', function ($query) {
                $query->where('name', 'User');
            });
        if (!empty($_GET)) {
            $search =  $request['s'];
            $city =  $request['city'];
            $year =  $request['year'];
            if (isset($search) && !empty($search)) {
                $allusers->where('first_name', 'like', '%' . $search . '%')
                    ->orWhere('last_name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            }
            if (isset($city) && !empty($city)) {
                $allusers->where('city', $city);
            }
            if (isset($year) && !empty($year)) {
                $allusers->whereYear('created_at', $year);
            }
        }
        return $allusers->orderBy('created_at', 'DESC')->simplePaginate(200);
    }

    public function approveAgent(User $users)
    {
        if ($users->status == 0) {
            $users->status = 1;
            $users->email_link = date('s') . 'Aris' . Str::random(12);
            if ($users->save()) {
                $data = $users->toArray();
                Mail::to($data['email'])->send(new AgentActivation($users->toArray()));
                setFlashData(
                    'alert-info',
                    'You have successfully approved the agent.',
                    redirect()->route('usersignedup')
                );
            } else {
                setFlashData(
                    'alert-info',
                    'Something went wrong, please try again.',
                    redirect()->route('usersignedup')
                );
            }
        } else {
            setFlashData(
                'alert-info',
                'The user is Already active, please contact the admin.',
                redirect()->route('usersignedup')
            );
        }
        $currentUser = $users->toArray();
    }

    public function approvesflusers(User $users)
    {
        if ($users->status == 0) {
            $users->status = 1;
            $users->email_link = date('s') . 'SFL' . Str::random(12);
            $users->load('role');
            $roleName = 'null';
            if (
                isset($users->toArray()['role']['name'])
                && !empty($users->toArray()['role']['name'])
            ) {
                if ($users->toArray()['role']['name'] == 'Lender') {
                    $roleName = 'Lending Company';
                } elseif ($users->toArray()['role']['name'] == 'Loan Officer') {
                    $roleName = $users->toArray()['role']['name'];
                } else {
                    setFlashData(
                        'alert-info',
                        'Something went wrong, please try again.',
                        redirect()->route('usersignedup')
                    );
                }
            } else {
                setFlashData(
                    'alert-info',
                    'You can\'t accept the reuest right now.',
                    redirect()->route('usersignedup')
                );
            }
            if ($users->save()) {
                $data = $users->toArray();
                $data['roleName'] = $roleName;
                Mail::to($data['email'])->send(new SflUserApprove($data));
                setFlashData(
                    'alert-info',
                    'You have successfully approved the agent.',
                    redirect()->route('usersignedup')
                );
            } else {
                setFlashData(
                    'alert-info',
                    'Something went wrong, please try again.',
                    redirect()->route('usersignedup')
                );
            }
        } else {
            setFlashData(
                'alert-info',
                'The user is Already active, please contact the admin.',
                redirect()->route('usersignedup')
            );
        }
        $currentUser = $users->toArray();
    }
    public function reviewsagent(Request $request)
    {
        $agents['agents'] = Reviews::getAgentsByReviews();
        return view('admins.reviews.reviewsagent', $agents);
    }
    public function agentreviewslist($id)
    {
        $data['reviews'] = Reviews::agentReviews($id);
        return view('admins.reviews.agentreviewslist', $data);
    }

    public function verifyReview(Request $request)
    {
        $review_id = $request->review_id;
        $reviewUpdate = Reviews::where('id', '=', $review_id)->update(['verified' => 'yes', 'verified_by' => getAdminId(), 'verified_on' => Carbon::now()]);
        if ($reviewUpdate) {
            $data['return'] = true;
            $data['message'] = 'You have successfully verified The review.';
            return response()->json($data);
        } else {
            $data['return'] = false;
            $data['message'] = 'Review Not Verified,';
            return response()->json($data);
        }
    }

    public function reviewsleader()
    {
        return view('admins.reviews.reviewsleader');
    }

    public function reviewsloanofficer()
    {
        return view('admins.reviews.reviewsloanofficer');
    }

    public function buyingguide(Request $request)
    {
        $leads = QueryModel::buyingInquiriesfilters($request);
        return view('admins.buyingguide', ['leads' => $leads]);
    }

    public function sellingguide(Request $request)
    {
        $leads = QueryModel::sellingInquiriesfilters($request);
        dd($leads);
        return view('admins.sellingguide', ['leads' => $leads]);
    }

    public function buyingleads(Request $request)
    {
        $leads = QueryModel::buyingLeadsfilters($request);
        return view('admins.buyingleads', ['leads' => $leads]);
    }

    public function moreInfo(PropertyMessageBox $property)
    {
        $data['property'] = $property->load('property')
            ->load('user');
        return view('admins.property-meeage', $data);
    }

    public function leadsInfo(PropertyLeads $leads)
    {
        $data['leads'] = $leads->load('userLeads');
        //dd($data);
        return view('admins.leads-details', $data);
    }
    public function sellingleads(Request $request)
    {
        $leadsData = QueryModel::leadsWithFilter($request);
        return view('admins.sellingleads')->with('leadsData', $leadsData);
    }

    public function finance(Request $request)
    {
        $wallet = QueryModel::finance($request);
        return view('admins.finance',  ['finance' => $wallet]);
    }

    public function tickets(Request $request)
    {
        $data['tickets'] = QueryModel::userTickets($request);
        //dd($data);
        return view('admins.tickets', $data);
    }
    public function ticketInfo(Complaint $complaint)
    {
        $data['complaint'] = $complaint->load('userComplaints')
            ->load('complaintStatus.ticketUpdatedBy');
        $data['currentUpdated']  = ComplaintStatus::select('status_changed_description')
            ->where('complaints_id', $complaint->id)->orderBy('created_at', 'desc')->first();
        //dd($data['complaint']['complaintStatus']);
        return view('admins.ticket-info', $data);
    }

    public function ticketUpdate(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'status' => 'required',
            'statusChangedDescription' => 'required',
        ]);

        ComplaintStatus::create([
            'complaints_id' => $data['complaintID'],
            'status_changed_description' => $data['statusChangedDescription'],
            'status_changed_by' => Auth::user()->id,
            'status' => $data['status']
        ]);
        DB::table('complaints')
            ->where('id', $data['complaintID'])
            ->update(['status' => $data['status']]);

        $data['ticket'] = ComplaintStatus::with('ticketUpdatedBy', 'complaint.userComplaints')
            ->where('complaints_id', $data['complaintID'])->orderBy('created_at', 'desc')->first()->toArray();

        TicketUpdateJob::dispatch($data)->delay(now()->addSeconds(10));

        return redirect()->back()->with('success', 'Ticket updated successfully.');
    }

    public function singleuser(User $users)
    {
        $data['singleUser'] = $users
            ->load('skills')
            ->load('questions')
            ->load('languages')
            ->load('experince')
            ->load('education')
            ->toArray();
        return view('admins.users.singleuser', $data);
    }
    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('adminHomeNew')
                ->withSuccess('Signed in');
        }
        setFlashData(
            'alert-primary',
            'Password not matched, please check your password and try again.',
            redirect()->route('adminLogin')
        );
        $email = $request->post('email');
        $password = $request->post('password');
        $isAdmin = User::checkUser($email);
        if (isset($isAdmin) && count($isAdmin) == 1) {
            if (Hash::check($password, $isAdmin[0]['password'])) {
                $adminData = [
                    'id' => $isAdmin[0]['id'],
                    'first_name' => $isAdmin[0]['first_name'],
                    'last_name' => $isAdmin[0]['last_name'],
                    'email' => $isAdmin[0]['email'],
                    'role_id' => $isAdmin[0]['role']['name'],
                    'mobile_number' => $isAdmin[0]['mobile_number'],
                    'address' => $isAdmin[0]['address'],
                    'country' => $isAdmin[0]['country'],
                    'state' => $isAdmin[0]['state'],
                    'city' => $isAdmin[0]['city'],
                    'postal_code' => $isAdmin[0]['postal_code'],
                    'hear_about_us' => $isAdmin[0]['hear_about_us'],
                    'web_link' => $isAdmin[0]['web_link'],
                    'linkedin_link' => $isAdmin[0]['linkedin_link'],
                    'veteran_status' => $isAdmin[0]['veteran_status'],
                    'gender' => $isAdmin[0]['gender'],
                    'ethnicity' => $isAdmin[0]['ethnicity'],
                    'created_at' => $isAdmin[0]['created_at'],
                    'updated_at' => $isAdmin[0]['updated_at'],
                ];
                session($adminData);
                if (session()->has('id')) {
                    return redirect()->route('adminHome');
                } else {
                    setFlashData(
                        'alert-primary',
                        'You can\'t login now because of session problem. ',
                        redirect()->route('adminLogin')
                    );
                }
            } else {
                setFlashData(
                    'alert-primary',
                    'Password not matched, please check your password and try again.',
                    redirect()->route('adminLogin')
                );
            }
        } else {
            setFlashData(
                'alert-primary',
                'Email is not Exist please create an account.',
                redirect()->route('adminLogin')
            );
        }
    }

    public function tourSchedule()
    {
        $tours = ScheduleTour::with('propertyTour')->simplePaginate(10);
        return view('admins.scheduletour', ['tours' => $tours]);
    }

    public function contactForm()
    {
        $contact = Contact::withTrashed()->get();
        return view('admins.contact-form', ['contacts' => $contact]);
    }

    public function suggestionForm()
    {
        $suggest = Suggestions::where('type', '=', 'suggestion')->get();
        return view('admins.suggestion', ['suggests' => $suggest]);
    }

    public function adviceForm()
    {
        $advice = Suggestions::where('type', '=', 'advice')->get();
        return view('admins.advice', ['advices' => $advice]);
    }

    public function addAdmin()
    {
        echo Hash::make('Shakzee171$');
    }

    public function reviews()
    {
        return view('admins.reviews.reviewsagent');
    }

    public function allNotifications(Request $request)
    {

        $data['notifications'] = QueryModel::notifications($request);
        //dd($data);
        return view('admins.notifications', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
