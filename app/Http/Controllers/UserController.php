<?php

namespace App\Http\Controllers;

use App\Events\UserNotification;
use App\Models\AgentLeads;
use Illuminate\Support\Str;
use App\Models\Properties;
use  App\Models\PropertyLeads;
use App\Models\User;
use App\Models\UserEducations;
use App\Models\UserQuestions;
use App\Models\WalletCredit;
use App\Models\WalletDebit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\WalletController;
use App\Jobs\TicketCreateJob;
use App\Models\AgentTeam;
use App\Models\Complaint;
use App\Models\ComplaintStatus;
use App\Models\FavoriteProperty;
use App\Models\PropertyMessageBox;
use App\Models\PropertySchedule;
use App\Models\QueryModel;
use App\Models\SaveSearches;
use App\Models\ScheduleTour;
use Illuminate\Contracts\Database\Eloquent\Builder;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    }

    public function userLogin(Request $request)
    {

        if ($request->ajax()) {
            // Handle AJAX login request
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return response()->json(['message' => 'Login successful']);
            } else {
                return response()->json(['message' => 'Invalid credentials'], 401);
            }
        } else {
            // Handle regular form submission

            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                // return view('properties.home');
                session()->flash('loginSuccessMessage', 'You have been successfully logged in.');
                return redirect()->back();
                // return back()->with('loginSuccessMessage', 'You have been successfully logged in.');
            } else {
                return back()->withErrors(['email' => 'These credentials do not match our records.']);
            }
        }
    }

    public function dashboard()
    {

        $data['agentQueries'] = QueryModel::agentQueries();
        $data['leads'] = QueryModel::agentLeads();
        //dd($data['agentQueries']);
        $data['userInquiries'] = AgentLeads::where('agent_id', getUserId())
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->get()
            ->toArray();
        $data['userProperties'] = Properties::where(['user_id' => getUserId(), 'IsMlsProperty' => 0])
            ->with('propertyDetail')
            ->with('prefferedMedia')
            ->with('StructureType')
            ->get()->toArray();
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
        //dd($data['userCity']);
        return view('users.dashboard', $data);
    }

    public function setuppassword($token)
    {
        $data['userData'] = User::where('email_link', $token)->get()->toArray();
        ///dd(count($data['userData']));
        if (isset($data['userData']) && count($data['userData']) == 1) {
            return view('users.setuppassword', $data);
        } else {
            session()->flash('class', 'alert-info');
            session()->flash('message', 'The link has expired or is no longer active; please check your email.');
            return redirect('/');
        }
    }

    public function newpassword(Request $request)
    {
        //dd($request->all())
        $request->validate([
            'token' => 'required',
            'password' => 'required|same:confirmPassword',
        ]);

        $userData = User::where('email_link', $request->post('token'))->get()->toArray();
        if (isset($userData) && count($userData) == 1) {
            $password = $request->post('password');
            $newUserData['password'] = Hash::make($password);
            $newUserData['email_link'] = $userData[0]['email_link'] . 'created';
            $userUpdate = User::where('id', $userData[0]['id'])->update($newUserData);
            if ($userUpdate) {
                session()->flash('class', 'alert-success');
                session()->flash('message', 'Now you can login with your account.');
                return redirect('/login');
            } else {
                session()->flash('class', 'alert-info');
                session()->flash('message', 'Please attempt the password creation process again.');
                return redirect('/login');
            }
        } else {
            session()->flash('class', 'alert-info');
            session()->flash('message', 'The data is not available.');
            return redirect('/login');
        }
        //dd($userData);
    }
    public function dashboardsimple()
    {
        return view('users.dashboardsimple');
    }
    public function userdashboard()
    {
        $data['userProperties'] = Properties::where(['user_id' => getUserId(), 'IsMlsProperty' => 0])
            ->with('propertyDetail')
            ->with('prefferedMedia')
            ->get()->toArray(); //->where('user_id', '=', getUserId())

        $data['addTofavourite'] = User::where('id', Auth::id())
            ->with(['favorite_property.prefferedMedia', 'favorite_property.StructureType'])
            ->first();
        $data['inquiries'] =  ScheduleTour::with('propertyTour')->where('seller_id', '=', Auth::user()->id)->get();
        $data['complaints'] = Complaint::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
        $data['savedSearches'] = SaveSearches::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
        // dd(json_decode($data['savedSearches'][0]['search_criteria']));
        return view('users.arisdashboard', $data);
    }
    public function deleteUserListing(Request $request)
    {
        //return $request->all();
        $id = $request->id;
        $userDelete = Properties::where('id', $id)->first();
        // return $contact;
        $userDelete->delete();
        $notification = array('message' => 'Inquiry Deleted Successfully ! ', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function updateuser(Request $request)
    {
        // $request->validate([
        //     'firstName'=>'required',
        //     'lastName'=>'required',
        //     'address'=>'required',
        //     'cityName'=>'required',
        //     'state'=>'required',
        //     'phone' => 'required',
        //     'zip' => 'required'
        // ]);

        $tableUser =  User::find(getUserId());
        //var_dump($fileName);
        $checkAdmin = User::all();
        $oldImage = $tableUser->toArray()['user_dp'];
        //dd($tableUser->toArray());
        if ($request->exists('userDp')) {
            $fileName = time() . 'aris.' . $request->file('userDp')->getClientOriginalExtension();
            $request->file('userDp')->move(public_path('images/userdp'), $fileName);
            $tableUser->user_dp  = $fileName;
        }

        $filePath = public_path('images/userdp');
        $newPassword = $request->post('password');

        if (isset($newPassword) && !empty($newPassword)) {
            $tableUser->password =  Hash::make($newPassword);
        }

        $tableUser->first_name  = $request->post('firstName');
        $tableUser->last_name  = $request->post('lastName');
        $tableUser->address  = $request->post('address') . ' ' . $request->post('address2');
        $tableUser->country  = $request->post('country');
        $tableUser->city  = $request->post('cityName');
        $tableUser->state  = $request->post('state');
        $tableUser->mobile_number  = $request->post('phone');
        $tableUser->postal_code  = $request->post('zip');

        if ($tableUser->save()) {
            if (isset($oldImage) && file_exists($filePath . '/' . $oldImage) && $request->exists('userDp')) {
                unlink($filePath . '/' . $oldImage);
            }
            setFlashData(
                'alert-success',
                'You have successfully updated the profile.',
                redirect()->route('userSimpleDashboard')
            );
        } else {
            setFlashData(
                'alert-primary',
                'You can\'t update the profile right now.',
                redirect()->route('userSimpleDashboard')
            );
        }
    }

    public function profile()
    {
        $data['agentType'] = 'seller';
        if (Auth::user()->is_seller == 1 && Auth::user()->is_buyer != 1) {
            $data['agentType'] = 'seller';
        } elseif (Auth::user()->is_seller == 1 && Auth::user()->is_buyer == 1) {
            $data['agentType'] = 'both';
        } elseif (Auth::user()->is_seller != 1 && Auth::user()->is_buyer == 1) {
            $data['agentType'] = 'buyer';
        }
        $data['agentTeams'] = AgentTeam::teams();
        //dd($data['agentTeams']);
        $data['agentlistings'] = Properties::agentListing();
        return view('users.profile', $data);
    }

    public function notification()
    {
        return view('users.notification');
    }

    public function updateAgent(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'firstName' => 'nullable',
            'lastName' => 'nullable',
            'licenseNumber' => 'nullable',
            'city' => 'nullable',
            //'agentType' => 'required',
            // 'contact'=>'required',
        ]);
        $tableUser =  User::find(getUserId());
        //var_dump($tableUser);
        //dd($request->all());
        $checkAdmin = User::all();
        $oldImage = $tableUser->toArray()['user_dp'];
        $oldCover = $tableUser->toArray()['cover_image'];
        if ($request->exists('userDp')) {
            $fileName = time() . 'aris.' . $request->file('userDp')->getClientOriginalExtension();
            $request->file('userDp')->move(public_path('images/userdp'), $fileName);
            $tableUser->user_dp  = $fileName;
            $allSession['user_dp'] = $fileName;
        }
        if ($request->exists('coverImage')) {
            $fileName = time() . 'aris.' . $request->file('coverImage')->getClientOriginalExtension();
            $request->file('coverImage')->move(public_path('images/userdp'), $fileName);
            $tableUser->cover_image  = $fileName;
            $allSession['cover_image'] = $fileName;
        }

        $filePath = public_path('images/userdp');
        $newPassword = $request->post('password');
        $allSession = session()->all();
        switch ($request->post('agentType')) {
            case 'buyer':
                $tableUser->is_buyer = 1;
                $tableUser->is_seller = 0;
                $allSession['is_buyer'] = 1;
                $allSession['is_seller'] = 0;
                break;
            case 'seller':
                $tableUser->is_buyer = 0;
                $tableUser->is_seller = 1;
                $allSession['is_buyer'] = 0;
                $allSession['is_seller'] = 1;
                break;
            case 'both':
                $tableUser->is_buyer = 1;
                $tableUser->is_seller = 1;
                $allSession['is_buyer'] = 1;
                $allSession['is_seller'] = 1;
                break;
            default:
                $tableUser->is_buyer = 1;
                break;
        }
        if ($request->post('about')) {
            $tableUser->about = $request->post('about');
            $allSession['about'] =  $request->post('about');
        }
        if ($request->post('totalDeals')) {
            $tableUser->total_deals = $request->post('totalDeals');
            $allSession['total_deals'] =  $request->post('totalDeals');
        }
        if ($request->post('dealVolume')) {
            $tableUser->deals_volume = $request->post('dealVolume');
            $allSession['deals_volume'] =  $request->post('dealVolume');
        }
        if ($request->post('address')) {
            $tableUser->address = $request->post('address');
            $allSession['address'] =  $request->post('address');
        }
        if ($request->post('highestDeal')) {
            $tableUser->highest_deal = $request->post('highestDeal');
            $allSession['highest_deal'] =  $request->post('highestDeal');
        }
        if ($request->post('contact')) {
            $tableUser->mobile_number = $request->post('contact');
            $allSession['mobile_number'] =  $request->post('contact');
        }
        if (isset($newPassword) && !empty($newPassword)) {
            $tableUser->password =  Hash::make($newPassword);
        }
        if ($request->post('licenseNumber')) {
            $questiondata['license_number'] = $request->post('licenseNumber');
            $questiondata['deals_completed'] = $request->post('homeSold');
            $questions = UserQuestions::where('user_id', getUserId())->update(
                $questiondata
            );
            //dd($questions);
            //$questions = $allSession['questions'];
            //$questions['license_number'] = $request->post('licenseNumber');
            //$questions['deals_completed'] = $request->post('homeSold');
            //$allSession['questions'] = $questions;

        }
        $tableUser->first_name  = $request->post('firstName');
        $tableUser->last_name  = $request->post('lastName');
        $tableUser->city  = $request->post('city');
        $message = '';
        if ($tableUser->save()) {
            if (isset($oldImage) && file_exists($filePath . '/' . $oldImage) && $request->exists('userDp')) {
                unlink($filePath . '/' . $oldImage);
            }
            if (isset($oldCover) && file_exists($filePath . '/' . $oldCover) && $request->exists('coverImage')) {
                unlink($filePath . '/' . $oldCover);
            }
            $allSession['first_name'] =  $request->post('firstName');
            $allSession['last_name'] =  $request->post('lastName');
            $allSession['city'] =  $request->post('city');

            $message = 'You have successfully updated the profile.';
            return redirect()->back()->withSuccess($message);
        } else {
            $message = 'You can\'t update the profile right now.';
            return redirect()->back()->withError($message);
        }
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return to_route('mainHome');
    }

    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');
        $currentUrl = $request->post('currenturl');
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ]);
        $email = $request->post('email');
        $password = $request->post('password');

        $isAdmin = User::checkUser($email);
        if (isset($isAdmin) && count($isAdmin) == 1 && $isAdmin[0]['role']['name'] != 'Admin') //custom checking admin
        {
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
                    'type' => $isAdmin[0]['type'],
                    'is_featured' => $isAdmin[0]['is_featured'],
                    'is_seller' => $isAdmin[0]['is_seller'],
                    'is_buyer' => $isAdmin[0]['is_buyer'],
                    'slug' => $isAdmin[0]['slug'],
                    'user_dp' => $isAdmin[0]['user_dp'],
                    'about' => $isAdmin[0]['about'],
                    'questions' => $isAdmin[0]['questions'],
                    'languages' => $isAdmin[0]['languages'],
                    'experince' => $isAdmin[0]['experince'],

                ];
                session($adminData);
                if (session()->has('id')) {
                    if ($isAdmin[0]['role']['name'] == 'User') {
                        return redirect()->route('userSimpleDashboard');
                    } else if ($isAdmin[0]['role']['name'] == 'Agent') {
                        return redirect()->route('userDashboard');
                    }
                } else {
                    session()->flash('class', 'alert-info');
                    session()->flash('message', 'You can\'t login now because of session problem.');
                    return redirect($currentUrl);
                }
            } else {
                session()->flash('class', 'alert-info');
                session()->flash('message', 'Password not matched, please check your password and try again.');
                return redirect($currentUrl);
            }
            //echo 'found..';
        } else {
            session()->flash('class', 'alert-info');
            session()->flash('message', 'Password not matched, please check your password and try again.');
            return redirect($currentUrl);
            //dd('admin here');
            // setFlashData(
            //     'alert-primary',
            //     'Please enter your credentials here in order to see your panel.',
            //     redirect()->route('adminLogin')
            // );
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }
    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)
    {
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    { #
        //
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
        //
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

    public function registerUser()
    {
        return view('users.simpleUser');
    }

    public function arisdashboard()
    {
        return view('users.arisdashboard');
    }

    public function simpleUser(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'mobile_number' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'hear_about_us' => 'required',
            'passsword' => 'required|same:confirm_password',

        ]);
        $dataUser['role_id'] = getUserRole();
        $dataUser['first_name'] = $request->post('first_name');
        $dataUser['last_name'] = $request->post('last_name');
        $dataUser['email'] = $request->post('email');
        $dataUser['mobile_number'] = $request->post('mobile_number');
        $dataUser['address'] = $request->post('address');
        $dataUser['country'] = $request->post('country');
        $dataUser['state'] = $request->post('state');
        $dataUser['city'] = $request->post('city');
        $dataUser['postal_code'] = $request->post('postal_code');
        $dataUser['hear_about_us'] = $request->post('hear_about_us');
        $dataUser['password'] = Hash::make($request->post('passsword'));

        User::create($dataUser);
        return redirect('user/dashboard')->with('success', 'Registration Completed, now you can login');
        $checkUser = User::where('email', $dataUser['email'])
            ->orWhere('mobile_number', $dataUser['mobile_number'])
            ->get()->toArray();
        if (isset($checkUser) && count($checkUser) > 0) {
            setFlashData(
                'alert-info',
                'The Email or Phone number you entered is already in use. Please check your email OR phone number and try again.',
                redirect()->route('userRegister')
            );
        } else {
            $roleId = getUserRole();
            if ($roleId) {
                $dataUser['role_id'] = $roleId;
                $user = DB::table('users')->insert($dataUser);
                if ($user) {
                    setFlashData(
                        'alert-info',
                        'You have successfully Created the Account now login.',
                        redirect()->route('userRegister')
                    );
                } else {
                    setFlashData(
                        'alert-info',
                        'Something went wrong during the account creation process, so please try again.',
                        redirect()->route('userRegister')
                    );
                }
            } else {
                setFlashData(
                    'alert-info',
                    'Please notify the site owner about the error.',
                    redirect()->route('userRegister')
                );
            }
        }
    }

    public function register()
    {
        return view('properties.apply-job'); //this is agent form.
    }

    public function newUser(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'mobile_number' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'hear_about_us' => 'required',
            'job_title' => 'required',
            'company' => 'required',
            'from_date' => 'required|date',
            'to_date' => 'required|date|after:from_date',
            'agentType' => 'required',
            'skill' => 'required',
            'userResume' => 'required|mimes:pdf,doc,docx',
            'userIdentity' => 'required|image|mimes:jpg,png,jpeg',
            'language' => 'required',
            'fluency_level' => 'required',
            'web_link' => 'required',
            'active_license_status' => 'required',
            'license_number' => 'required',
            'deals_completed' => 'required',
            'license_suspension_ten_years_status' => 'required',
            'real_estate_assoc_disciplined_status' => 'required',
            'license_under_investigation_status' => 'required',
            'license_restriction_status' => 'required',
            'license_unrestricted_status' => 'required',
            'real_estate_assoc_name' => 'required',
            'veteran_status' => 'required',
            'gender' => 'required',
            'ethnicity' => 'required',
            'i_agree' => 'required',

        ]);

        $dataUser['first_name'] = $request->post('first_name');
        $dataUser['last_name'] = $request->post('last_name');
        $dataUser['email'] = $request->post('email');
        $dataUser['mobile_number'] = $request->post('mobile_number');
        $dataUser['address'] = $request->post('address');
        $dataUser['country'] = $request->post('country');
        $dataUser['state'] = $request->post('state');
        $dataUser['city'] = $request->post('city');
        $dataUser['postal_code'] = $request->post('postal_code');
        $dataUser['hear_about_us'] = $request->post('hear_about_us');
        $dataUser['web_link'] = $request->post('web_link');
        $dataUser['linkedin_link'] = $request->post('linkedin_link');
        $dataUser['veteran_status'] = $request->post('veteran_status');
        $dataUser['gender'] = $request->post('gender');
        $dataUser['ethnicity'] = $request->post('ethnicity');
        $dataUser['type'] = $request->post('agentType');
        $dataUser['created_at'] = date('Y-m-d H:i:s');
        $dataUser['updated_at'] = date('Y-m-d H:i:s');

        $identfileName = time() . 'aris.' . $request->file('userIdentity')->getClientOriginalExtension();
        $request->file('userIdentity')->move(public_path('images/identity'), $identfileName);
        $dataUser['identity'] = $identfileName;

        $questionUser['active_license_status'] = $request->post('active_license_status');
        $questionUser['license_number'] = $request->post('license_number');
        $questionUser['deals_completed'] = $request->post('deals_completed');
        $questionUser['license_suspension_ten_years_status'] = $request->post('license_suspension_ten_years_status');
        $questionUser['real_estate_assoc_disciplined_status'] = $request->post('real_estate_assoc_disciplined_status');
        $questionUser['license_under_investigation_status'] = $request->post('license_under_investigation_status');
        $questionUser['license_restriction_status'] = $request->post('license_restriction_status');
        $questionUser['license_unrestricted_status'] = $request->post('license_unrestricted_status');
        $questionUser['deals_exclude_lease_completed'] = $request->post('deals_exclude_lease_completed');
        $questionUser['real_estate_assoc_name'] = $request->post('real_estate_assoc_name');
        $questionUser['real_estate_assoc_name'] = implode(', ', $questionUser['real_estate_assoc_name']);
        $questionUser['created_at'] = date('Y-m-d H:i:s');
        $questionUser['updated_at'] = date('Y-m-d H:i:s');

        $fileName = time() . 'aris.' . $request->file('userResume')->getClientOriginalExtension();

        $request->file('userResume')->move(public_path('resume'), $fileName);
        $skillsUser['skill'] = $request->post('skill');
        $skillsUser['resume'] = $fileName; //$request->post('resume');
        $skillsUser['created_at'] = date('Y-m-d H:i:s');
        $skillsUser['updated_at'] = date('Y-m-d H:i:s');
        $languageUser['language'] = $request->post('language');
        $languageUser['fluency_level'] = $request->post('fluency_level');
        $languageUser['created_at'] = date('Y-m-d H:i:s');
        $languageUser['updated_at'] = date('Y-m-d H:i:s');

        $exprenceUser['job_title'] = $request->post('job_title');
        $exprenceUser['company'] = $request->post('company');
        $exprenceUser['from_date'] = $request->post('from_date');
        $exprenceUser['to_date'] = $request->post('to_date');

        $exprenceUser['created_at'] = date('Y-m-d H:i:s');
        $exprenceUser['updated_at'] = date('Y-m-d H:i:s');
        $checkUser = User::where('email', $dataUser['email'])
            ->orWhere('mobile_number', $dataUser['mobile_number'])
            ->get()->toArray();
        if (isset($checkUser) && count($checkUser) > 0) {
            setFlashData(
                'alert-info',
                'The Email or Phone number you entered is already in use. Please check your email OR phone number and try again.',
                redirect()->route('register')
            );
        } else {
            DB::beginTransaction();
            $message = '';
            try {
                $dataUser['role_id'] = getAgentRole();
                $userId = DB::table('users')->insertGetId($dataUser);
                $questionUser['user_id'] = $userId;
                $languageUser['user_id'] = $userId;
                $skillsUser['user_id'] = $userId;
                $exprenceUser['user_id'] = $userId;
                DB::table('user_questions')->insert($questionUser);
                DB::table('user_languages')->insert($languageUser);
                DB::table('user_skills')->insert($skillsUser);
                DB::table('user_experiences')->insert($exprenceUser);
                DB::commit();
                $message = 'You have successfully registered an account, and it will be activated as soon as the admin approves your request.';
            } catch (\Exception $e) {

                DB::rollback();
                $message = 'Currently, you cannot create the account because something went wrong.';
            }
            setFlashData(
                'alert-info',
                $message,
                redirect()->route('register')
            );
        }
        // Trasaction start for registration users

    }


    public function agentTeam(Request $request)
    {
        $request->validate([
            'agentTeam' => 'required',
        ]);
        // form data
        $agentTeam['agent_team_id'] = $request->agentTeam;
        //$agentTeam['dp'] = $profile;
        //$agentTeam['designation'] = $request->designation;
        $agentTeam['agent_id'] = getUserId();
        $inserted = AgentTeam::create($agentTeam);
        $message = '';
        if ($inserted) {
            $message = 'Agent has been added to your team';
            return redirect()->back()->withSuccess($message);
        } else {
            $message = 'something went wrong, please try again! ';
            return redirect()->back()->withSuccess($message);
        }
    }

    // Code added by Ubaid for email validation
    public function emailValidation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => "Email already exists, please try another",
            ]);
        }
    }

    public function updateProfileImage(Request $request)
    {
        $user = Auth::user();
        if ($request->hasFile('profile_image')) {
            $profile = time() . 'aris.' . $request->file('profile_image')->getClientOriginalExtension();
            $request->file('profile_image')->move(public_path('images/userdp'), $profile);

            DB::table('users')
                ->where('id', $user->id)
                ->update(['user_dp' => $profile]);

            return response()->json(['message' => 'Profile image updated successfully.']);
        }

        return response()->json(['error' => 'Profile image not provided.'], 400);
    }

    // UserController.

    public function resetPassword(Request $request)
    {
        $user = auth()->user(); // Assuming the user is authenticated
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);
        // Check if the user signed up using a social provider
        if ($user->google_id !== null || $user->facebook_id !== null) {
            return back()->with('status', 'This email was used for social login.');
        }
        // Verify current password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }
        // Update the password
        DB::table('users')
            ->where('id', $user->id)
            ->update(['password' => bcrypt($request->new_password)]);
        return redirect()->back()->with('success', 'Password changed successfully.');
    }

    public function userComplaint(Request $request)
    {
        $complaintdata = $request->all();
        $request->validate([
            'complaintType' => 'required',
            'subject' => 'required',
            'description' => 'required',
            'attachments' => 'nullable|array|max:4', // Allow up to 4 attachments
            'attachments.*' => 'nullable|file|image|mimes:jpeg,png|max:2048', // Adjust size and allowed types

        ]);

        $attachmentPaths = [];
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $attachment) {

                $profile = $complaintdata['complaintType'] . Str::random(3)  . 'aris.' . $attachment->getClientOriginalExtension();
                $attachment->move(public_path('images/tickets'), $profile);
                $attachmentPaths[] = $profile;
            }
        }
        $complaint = Complaint::create([
            'type' => $complaintdata['complaintType'],
            'subject' => $complaintdata['subject'],
            'description' => $complaintdata['description'],
            'attachment' =>  isset($attachmentPaths[0]) ? $attachmentPaths[0] : null,
            'attachment2' =>  isset($attachmentPaths[1]) ? $attachmentPaths[1] : null,
            'attachment3' => isset($attachmentPaths[2]) ? $attachmentPaths[2] : null,
            'attachment4' => isset($attachmentPaths[3]) ? $attachmentPaths[3] : null,
            'user_id' => Auth::user()->id,
            'ticket_no' => mt_rand(1000000, 9999999),
            'status' => 'Pending'
        ]);
        ComplaintStatus::create([
            'complaints_id' => $complaint->id,
            'status' => $complaint->status
        ]);
        $data['ticket'] = Complaint::with('userComplaints')->where('id', $complaint->id)->first()->toArray();


        $data['type'] = 'New Ticket Generated ';
        $data['time'] = Carbon::now();
        $data['path'] = asset('public/images/userdp/');
        $data['link'] = url('admin/ticket-info/' . $complaint->id);
        $link = 'admin/ticket-info/' . $complaint->id;
        $data['user'] = User::where('id', getUserId())->first()->toArray();
        $data['message'] = Auth::user()->first_name . ' Generated a ticket  ' . $complaint->subject . ' ' . $complaint->description;

        // $agent = User::where('id',Auth::user()->id)->first()->toArray();
        createNotification(getUserId(), $complaint->description . $complaint->subject, Auth::user()->first_name . 'Generated a ticket ' . $complaint->subject . ' ' . $complaint->description, 'New Ticket Generated', null, null, null, $link);
        event(new UserNotification($data));
        TicketCreateJob::dispatch($data['ticket'])->delay(now()->addSeconds(10));
        return redirect()->back()->with('success', 'Ticket created successfully.');
    }

    public function deleteSearch(Request $request, $id)
    {
        $savedSearch = SaveSearches::find($id);

        if ($savedSearch) {
            // Delete the SavedSearch
            $savedSearch->delete();

            return redirect()->back()->with('success', 'Saved search deleted successfully.');
        }

        return redirect()->back()->with('error', 'Failed to delete saved search.');
    }
}//class here
