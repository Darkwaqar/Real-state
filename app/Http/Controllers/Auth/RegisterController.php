<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserNotification;
use App\Http\Controllers\Controller;
use App\Mail\NewAgentAccount;
use App\Mail\NewUserAccount;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UserExperiences;
use App\Models\UserLanguages;
use App\Models\PropertyLeads;
use App\Models\UserQuestions;
use App\Models\UserSkills;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        if (isset($data['skzxyylxe']) && !empty($data['skzxyylxe']) && $data['skzxyylxe'] == 'skzxyylxe') {
            return Validator::make($data, [
                'full_name' => ['required', 'string', 'max:50'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'mobile_number' => ['required'],
                'address' => ['required'],
                'country' => ['required'],
                'state' => ['required'],
                'city' => ['required'],
                'postal_code' => ['required'],
                'hear_about_us' => ['required'],
                'passsword' => ['required','same:confirm_password'],

            ]);
        } else {
            
            return Validator::make($data, [
                'full_name' => ['required', 'string', 'max:50'],
                //'last_name' => ['required', 'string', 'max:50'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'mobile_number' => ['required'],
                'address' => ['required'],
                'country' => ['required'],
                'state' => ['required'],
                'city' => ['required'],
                'postal_code' => ['required'],
                'hear_about_us' => ['required'],
                'job_title' => ['required'],
                'company' => ['required'],
                'from_date' => ['required'],
                //'to_date' => ['required'],
                // 'agentType' => ['required'],
                'skill' => ['required'],
                 'userResume' => ['required'],
                'userIdentity' => ['required'],
                'language' => ['required'],
                //'fluency_level' => ['required'],
                // 'web_link' => ['required'],
                'active_license_status' => ['required'],
                'license_number' => ['required'],
                'deals_completed' => ['required'],
                'license_suspension_ten_years_status' => ['required'],
                'real_estate_assoc_disciplined_status' => ['required'],
                'license_under_investigation_status' => ['required'],
                'license_restriction_status' => ['required'],
                'license_unrestricted_status' =>['required'],
                'real_estate_assoc_name' => ['required'],
                'veteran_status' => ['required'],
                'gender' => ['required'],
               // 'ethnicity' => ['required'],
                'i_agree' => ['required'],
                // 'skzrandom' => ['required', 'min:8'],
            ]);

        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //dd($data);
        if (isset($data['skzxyylxe']) && !empty($data['skzxyylxe']) && $data['skzxyylxe'] == 'skzxyylxe') {
            // $seotitle = preg_replace("/[^a-zA-Z0-9\s]/","",$data['first_name'] .' '. $data['last_name']);
            // $seotitle = trim($seotitle);
            // $seotitle = preg_replace("/\s+/"," ",$seotitle);
            // $seotitle = str_replace(" ","-",$seotitle);
            // $seotitle = strtolower($seotitle);
            //dd($seotitle);
            $nameParts = explode(' ', $data['full_name']);
            $firstName = $nameParts[0];
            $lastName = (count($nameParts) > 1) ? implode(' ', array_slice($nameParts, 1)) : '';
            $userTableData =  User::create([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $data['email'],
                'role_id' => getUserRole(),
                'mobile_number' => $data['mobile_number'],
                'address' => $data['address'],
                'country' => $data['country'],
                'state' => $data['state'],
                'city' => $data['city'],
                'postal_code' => $data['postal_code'],
                'hear_about_us' => $data['hear_about_us'],
                'status' => 1,
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make($data['passsword']),
                'slug' => createSEOUrl($firstName.$lastName),
            ]);
                $noti['type'] = 'New User Registration';
                $noti['user'] = User::where('id', $userTableData->id)->first()->toArray();
                $noti['is_read'] = false;
                $noti['path'] = asset('public/images/userdp/');
                $noti['link'] = 'admin/user-signed-up/'.$userTableData->id;
                $noti['message'] = 'New User ('.$userTableData->first_name. ')  Signed Up';
                $noti['time'] = Carbon::now();
            event(new UserNotification($noti));
            createNotification($userTableData->id,'New Agent Sign Up','New Agent ('.$userTableData->first_name. ')  Signed Up','New User Registration',null,null,null,$noti['link']);
            // if($userTableData){
            //     $finalslugData = $seotitle.'-'.$userTableData->id;
            //     $user = User::findOrFail
            //     User::update(['slug'=>$finalslugData])->where('id',$userTableData->id);
            // }
            //Mail::to($data['emial'])->send(new NewUserAccount($data));
        } else {
           // dd($data['userIdentity']);
            $request = request();
            $identfileName = time() . 'aris.' . $data['userIdentity']->getClientOriginalExtension();
            $request->file('userIdentity')->move(public_path('images/identity'), $identfileName);
            $fileName = time() . 'aris.' . $request->file('userResume')->getClientOriginalExtension();
            $request->file('userResume')->move(public_path('resume'), $fileName);
          $questionUser['active_license_status'] = $data['active_license_status'];
          $questionUser['license_number'] = $data['license_number'];
          $questionUser['deals_completed'] = $data['deals_completed'];
          $questionUser['license_suspension_ten_years_status'] = $data['license_suspension_ten_years_status'];
          $questionUser['real_estate_assoc_disciplined_status'] = $data['real_estate_assoc_disciplined_status'];
          $questionUser['license_under_investigation_status'] = $data['license_under_investigation_status'];
          $questionUser['license_restriction_status'] = $data['license_restriction_status'];
          $questionUser['license_unrestricted_status'] = $data['license_unrestricted_status'];
          //$questionUser['deals_exclude_lease_completed'] = $data['deals_exclude_lease_completed'];
          $questionUser['real_estate_assoc_name'] = $data['real_estate_assoc_name'];
          $questionUser['real_estate_assoc_name'] = implode(', ', $questionUser['real_estate_assoc_name']);
          $skillsUser['skill'] =  $data['skill'];
          //$skillsUser['skill'] = implode(', ', $skillsUser['skill']);

          $skillsUser['resume'] = $fileName; //$request->post('resume');
          //$skillsUser['resume'] = 'randomfilehere'; //$request->post('resume');
          // $skillsUser['created_at'] = date('Y-m-d H:i:s');
          // $skillsUser['updated_at'] = date('Y-m-d H:i:s');
            
          $languageUser['language'] = $data['language'];
          $languageUser['language'] = implode(', ', $languageUser['language']);
          //$languageUser['fluency_level'] = $data['fluency_level'];
          // $languageUser['created_at'] = date('Y-m-d H:i:s');
          // $languageUser['updated_at'] = date('Y-m-d H:i:s');
        //   $exprenceUser['job_title'] = $data['job_title'];
        //   $exprenceUser['job_title'] = implode(', ', $exprenceUser['job_title']);
        //   $exprenceUser['company'] = $data['company'];
        //   $exprenceUser['company'] = implode(', ', $exprenceUser['company']);
        //   $exprenceUser['from_date'] = $data['from_date'];
        //   $exprenceUser['from_date'] = implode(', ', $exprenceUser['from_date']);
        //   $exprenceUser['to_date'] = $data['to_date'];
        //   $exprenceUser['to_date'] = implode(', ', $exprenceUser['from_date']);
          // $exprenceUser['created_at'] = date('Y-m-d H:i:s');
          // $exprenceUser['updated_at'] = date('Y-m-d H:i:s');
        //$data['identity'] = $identfileName;
          $nameParts = explode(' ', $data['full_name']);
          $firstName = $nameParts[0];
          $lastName = (count($nameParts) > 1) ? implode(' ', array_slice($nameParts, 1)) : '';
         
          $userTableData =  User::create([
              'first_name' => $firstName,
              'last_name' => $lastName,
              'email' => $data['email'],
              'role_id' => getAgentRole(),
              'mobile_number' => $data['mobile_number'],
              'address' => $data['address'],
              'country' => $data['country'],
              'state' => $data['state'],
              'city' => $data['city'],
              'postal_code' => $data['postal_code'],
              'hear_about_us' => $data['hear_about_us'],
              'web_link' => $data['web_link'],
              'linkedin_link' => $data['linkedin_link'],
              'veteran_status' => $data['veteran_status'],
              'status' => 0,
              'is_featured' => 1,
              'is_buyer' => 1,
              'is_seller' => 1,
              'gender' => $data['gender'],
              'ethnicity' => $data['ethnicity'],
              'type' => 'aris',//$data['agentType'],
              'password' => Hash::make(Str::random(8)),
              'agent_pasword' => Str::random(8),
              'identity' => $identfileName,
              'slug' => createSEOUrl($firstName.$lastName),

          ]);
            $noti['type'] = 'New Agent Registration';
          //$noti['user'] = User::where('id',$userTableData->id)->first()->toArray();
         // $data['user'] = User::where('id', $saveUser->id)->first()->toArray();
                //$data['type'] = ' Agent Sign Up';
            $noti['message'] = 'New Agent ('.$userTableData->first_name. ')  Signed Up';
            //$noti['path'] = asset('public/images/userdp/');
            $noti['user'] = User::where('id', $userTableData->id)->first()->toArray();
            $noti['is_read'] = false;
            $noti['path'] = asset('public/images/userdp/');
            $noti['link'] = 'admin/user-signed-up/'.$userTableData->id;
            $noti['time'] = Carbon::now();
          event(new UserNotification($noti));
          createNotification($userTableData->id,'New Agent Sign Up','a New Agent '.$firstName.' Signed Up','New Agent Registration',null,null,null,$noti['link']);

          $jobTitles = $data['job_title'];
          $companies = $data['company'];
          $fromDates = $data['from_date'];
          $toDates = $data['to_date'];

          $userExperiencesData = [];

            // Loop through each job experience and prepare the data to be inserted
                foreach ($jobTitles as $index => $jobTitle) {
                $userExperiencesData[] = [
                    'user_id'   => $userTableData->id,
                    'job_title' => $jobTitle,
                    'company' => $companies[$index],
                    'from_date' => $fromDates[$index],
                    'to_date' => $toDates[$index],
                    // Any other columns you want to insert related to job experience
                    // 'other_column' => $value,
                ];
            }
            UserExperiences::insert($userExperiencesData);

          $questionUser['user_id'] = $userTableData->id;
          $skillsUser['user_id'] = $userTableData->id;
          $languageUser['user_id'] = $userTableData->id;
          $exprenceUser['user_id'] = $userTableData->id;


          UserQuestions::create($questionUser);
          UserSkills::create($skillsUser);
          UserLanguages::create($languageUser);
          //UserExperiences::create($exprenceUser);
          //Mail::to($data['email'])->send(new NewAgentAccount($data));
        }
        //dd();
         return $userTableData;
    }
}
