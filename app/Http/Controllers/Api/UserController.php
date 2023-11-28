<?php

namespace App\Http\Controllers\Api;

use App\Events\UserNotification;
use App\Http\Controllers\Controller;
use App\Models\AgentTeam;
use App\Models\Complaint;
use App\Models\FavoriteProperty;
use App\Models\Properties;
use App\Models\PropertySchedule;
use App\Models\Reviews;
use App\Models\SaveSearches;
use App\Models\ScheduleTour;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\UserExperiences;
use App\Models\UserLanguages;
use App\Models\UserQuestions;
use App\Models\UserSkills;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' =>  'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                ['status' => 400, 'errors' => $validator->errors()->toArray()]
            );
        } else {
            if (!Auth::attempt($request->only(['email', 'password']))) {

                return response()->json([
                    'status' => false,
                    'message' => 'Invalid credentials !.',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();
            if ($user->status == 1) {
                return response()->json([
                    'status' => true,
                    'message' => 'User Logged In Successfully',
                    'token' => $user->createToken("mytoken")->plainTextToken,
                    'userData' => $user
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Email is not verified !'
                ]);
            }
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:35',
            'last_name' =>  'required|max:35',
            'city' =>  'required',
            'mobile_number' =>  'required||unique:users,mobile_number',
            'email' =>  'required|email|unique:users',
            'password' => 'required',
            'address' => 'required|max:200',

        ]);

        if ($validator->fails()) {
            return response()->json(
                ['status' => 400, 'errors' => $validator->errors()->toArray()]
            );
        } else {

            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'city' => $request->city,
                'address' => $request->address,
                'mobile_number' => $request->mobile_number,
                'email' => $request->email,
                'role_id' => 5,
                'status' => 1,
                'email_verified_at' => Carbon::now(),
                'slug' => createSEOUrl($request->last_name),
                'password' => Hash::make($request->password),
                'agent_pasword' => Str::random(8)
            ]);
            $token = $user->createToken('mytoken')->plainTextToken;


            return response([
                'status' => 200,
                'message' => 'User created!.',
                'token' => $token,
                'userData' => $user
            ], 200);
        }
    }

    public function agentRegistration(Request $request)
    {
        $data = $request->all();
        $validator =  Validator::make($request->all(), [
            'full_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile_number' => [
                'required',
                'regex:/^\d{3}-\d{3}-\d{4}$/',
                'unique:users,mobile_number',
            ], 
            'address' => ['required', 'string'],
            'country' => [ 'required', 'in:US','United States',],
            'state' => [
                'required',
                'in:AL,AK,AZ,AR,CA,CO,CT,DE,FL,GA,HI,ID,IL,IN,IA,KS,KY,LA,ME,MD,MA,MI,MN,MS,MO,MT,NE,NV,NH,NJ,NM,NY,NC,ND,OH,OK,OR,PA,RI,SC,SD,TN,TX,UT,VT,VA,WA,WV,WI,WY',
            ],
            'city' => ['required', 'string'],
            'postal_code' => [ 'required', 'regex:/^\d{5}(-\d{4})?$/', ],
            'hear_about_us' => ['required'],
            'job_title' => ['required'],
            'company' => ['required'],
            'from_date' => ['required'],
            'to_date' => ['required'],
            // 'agentType' => ['required'],
            'skill' => ['required'],
            'userResume' => [ 'required','file', 'mimes:pdf',  ],
            'userIdentity' => [ 'required', 'i mage', ],
            'language' => ['required'],
            //'fluency_level' => ['required'],
            'linkedin_link' => ['nullable','url',],
             'web_link' => ['nullable','url'],
             'active_license_status' => [ 'required',  'in:yes,no,Yes,No',],
            'license_number' => ['required'],
            'deals_completed' => ['required'],
            'license_suspension_ten_years_status' => [ 'required',  'in:yes,no,Yes,No',],
            'real_estate_assoc_disciplined_status' => [ 'required',  'in:yes,no,Yes,No',],
            'license_under_investigation_status' =>  [ 'required',  'in:yes,no,Yes,No',],
            'license_restriction_status' => [ 'required',  'in:yes,no,Yes,No',],
            'license_unrestricted_status' => [ 'required',  'in:yes,no,Yes,No',],
            'real_estate_assoc_name' => ['required'],
            'veteran_status' => ['required'],
            'gender' => ['required'],
             'ethnicity' => ['required'],
            'i_agree' => [ 'required',  'in:yes,no,Yes,No',],
        ]);
        if ($validator->fails()) {
            return response()->json(
                ['status' => 400, 'errors' => $validator->errors()->toArray()]
            );
        } else {
            
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
            $questionUser['real_estate_assoc_name'] = $data['real_estate_assoc_name'];
            $questionUser['real_estate_assoc_name'] = implode(', ', $questionUser['real_estate_assoc_name']);
            $skillsUser['skill'] =  $data['skill'];


            $skillsUser['resume'] = $fileName;

            $languageUser['language'] = $data['language'];
            $languageUser['language'] = implode(', ', $languageUser['language']);

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
                'type' => 'aris', //$data['agentType'],
                'password' => Hash::make(Str::random(8)),
                'agent_pasword' => Str::random(8),
                'identity' => $identfileName,
                'slug' => createSEOUrl($firstName . $lastName),

            ]);
            $noti['type'] = 'New Agent Registration';

            $noti['message'] = 'New Agent (' . $userTableData->first_name . ')  Signed Up';

            $noti['user'] = User::where('id', $userTableData->id)->first()->toArray();
            $noti['is_read'] = false;
            $noti['path'] = asset('public/images/userdp/');
            $noti['link'] = 'admin/user-signed-up/' . $userTableData->id;
            $noti['time'] = Carbon::now();
            event(new UserNotification($noti));
            createNotification($userTableData->id, 'New Agent Sign Up', 'a New Agent ' . $firstName . ' Signed Up', 'New Agent Registration', null, null, null, $noti['link']);

            $jobTitles = $data['job_title'];
            $companies = $data['company'];
            $fromDates = $data['from_date'];
            $toDates = $data['to_date'];

            $userExperiencesData = [];

            foreach ($jobTitles as $index => $jobTitle) {
                $userExperiencesData[] = [
                    'user_id'   => $userTableData->id,
                    'job_title' => $jobTitle,
                    'company' => $companies[$index],
                    'from_date' => $fromDates[$index],
                    'to_date' => $toDates[$index],

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

            $token = $userTableData->createToken('mytoken')->plainTextToken;


            return response([
                'status' => true,
                'message' => 'Agent created!.',
                'token' => $token,
                'userData' => $userTableData
            ], 200);
        }
    }

    public function userDashboard(Request $request)
    {
        $userId = Auth::id();

        $userProperties = Properties::where(['user_id' => $userId, 'IsMlsProperty' => 0])
            ->with('propertyDetail')
            ->with('prefferedMedia')
            ->get()->toArray();

        $userData = FavoriteProperty::where('user_id', $userId)->where('is_fav', '=', 1)
            ->with(['userfavProperties.StructureType', 'userfavProperties.prefferedMedia'])
            ->get()->toArray();

        $inquiries = PropertySchedule::with('property')->where('agent_id', $userId)->get()->toArray();
        $userInquiries = PropertySchedule::with('property')->where('buyer_id', $userId)->get()->toArray();
        $complaints = Complaint::where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get()->toArray();

        $savedSearches = SaveSearches::where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get()->toArray();

        $responseData = [
            'userData' => Auth::user(),
            'userProperties' => $userProperties,
            'addTofavourite' => $userData,
            'inquiries' => $inquiries,
            'complaints' => $complaints,
            'savedSearches' => $savedSearches,
            'userInquiries' => $userInquiries
        ];

        return response()->json($responseData);
    }
    public function updateuser(Request $request)
    {
        // Validate the request data
        $request->validate([
            'firstName' => 'sometimes|required',
            'lastName' => 'sometimes|required',
            'address' => 'sometimes|required',
            'cityName' => 'sometimes|required',
            'state' => 'sometimes|required',
            'phone' => 'sometimes|required',
            'zip' => 'sometimes|required',
            'userDp' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image upload
            //'password' => 'sometimes|nullable|string|min:8',
        ]);

        // Get the authenticated user
        $user = $request->user();

        // Handle user image upload
        if ($request->hasFile('userDp')) {
            // Validate and store the uploaded image
            $fileName = time() . 'aris.' . $request->file('userDp')->getClientOriginalExtension();
            $request->file('userDp')->move(public_path('images/userdp'), $fileName);

            // Delete the old image if it exists
            if ($user->user_dp && file_exists(public_path('images/userdp') . '/' . $user->user_dp)) {
                unlink(public_path('images/userdp') . '/' . $user->user_dp);
            }

            // Update the user's profile image
            $user->user_dp = $fileName;
        }

        // Update user profile fields
        $user->fill([
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'address' => $request->input('address') . ' ' . $request->input('address2'),
            'country' => $request->input('country'),
            'city' => $request->input('cityName'),
            'state' => $request->input('state'),
            'mobile_number' => $request->input('phone'),
            'postal_code' => $request->input('zip'),
            // 'password' => $request->input('password'),
        ]);

        // Update user password if provided
        // $newPassword = $request->input('password');
        // if ($newPassword) {
        //     $user->password = Hash::make($newPassword);
        // }

        // Save the updated user profile
        if ($user->save()) {
            return response()->json(['message' => 'Profile updated successfully', 'user' => $user]);
        } else {
            return response()->json(['message' => 'Failed to update profile'], 500);
        }
    }
    public function getTemplates(Request $request)
    {

        dd($request->all());
    }

    public function deleteUserListing(Request $request)
    {
        try {
            $id = $request->propertyId;
            $property = Properties::findOrFail($id);

            // Check if the authenticated user is the owner of the property
            if (Auth::user()->id !== $property->user_id) {
                return response()->json(['message' => 'You are not authorized to delete this listing', 'status' => false], 403);
            }

            $property->delete();

            return response()->json(['message' => 'Listing deleted successfully', 'status' => true], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete listing', 'status' => false], 500);
        }
    }


    public function deleteUser(Request $request)
    {
        try {
            // Validate the request, ensuring that the user is authenticated and has the necessary permissions.

            // Get the user ID from the request or any other method you use for retrieving user IDs.
            $userId = getUserId();

            // Check if the user exists.
            $user = User::find($userId);

            if (!$user) {
                return response()->json(['message' => 'User not found', 'status' => false], 404);
            }
            $user->deleted_by = 'self';
            $user->save();
            $user->delete();

            return response()->json(['message' => 'User deleted successfully', 'status' => true], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete user', 'status' => false], 500);
        }
    }

    public function allAgent(){

        $agents['allAgents'] = User::with('Education', 'Experience', 'Language', 'Question', 'Skills','role')
                                  ->where('status' , 1)
                                  ->whereHas('role', function ($q)  { $q->where('name', '=', 'Agent'); })
                                  ->orderBy('agent_sort_key', 'DESC')
                                  ->get()
                                  ->each(function ($user) {
                                      $user['review_statistics'] = $user->getReviewStatistics();
                                  })
                                  ->toArray();
                                  return response()->json($agents);
    }

    public function agentDetail(Request $request)
    {
        
        $userId = $request->agent_id;
        $agentReviews = Reviews::getAgentReviews($userId);
        $agentTeam = AgentTeam::agentTeamById($userId);
        $agentlistings = Properties::agentListingById($userId);
        $agentDetail = User::realEstateAgentById($userId);
        $responseData['agentDetails'] = [
            'Agent' => $agentDetail,
            'agentTeam' => $agentTeam,
            'agentListings' => $agentlistings,
            'agentReviews' => $agentReviews,

        ];
        return response()->json($responseData);
    }
}
