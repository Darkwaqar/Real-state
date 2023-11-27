<?php



namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $dates = ['deleted_at'];
    protected $fillable = [

        'name',
        'email',
        'password',
        'agent_pasword', //this is for temporary password which we rae going to genrate
        'first_name',
        'user_name',
        'last_name',
        'mobile_number',
        'address',
        'country',
        'state',
        'city',
        'postal_code',
        'hear_about_us',
        'role_id',
        'web_link',
        'linkedin_link',
        'veteran_status',
        'status',
        'gender',
        'ethnicity',
        'is_featured',
        'is_seller',
        'is_buyer',
        'about',
        'user_dp',
        'admin_id',
        'slug',
        'type',
        'deleted_at',
        'identity',
        'email_verified_at',
        'agent_pasword',
        'email_link',
        'remember_token',
        'google_id',
        'facebook_id',
        'company_dp',
        'company_nmls_id',
        'user_nmls_id',
        'company_name',
        'business_structure',
        'address2',
        'date_formed',
        'fiscal_year_end',
        'formed_in',
        'primary_fedral_regulator',
        'registration_status',
        'stock_symbol',
        'website',
        'office_number',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**

     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function schedule()
    {
        return $this->hasMany(PropertySchedule::class, 'user_id',); //user can have multiple Experience with UserExperiences Model
    }
    public function messageBox()
    {
        return $this->hasMany(PropertyMessageBox::class, 'user_id',); //user can have multiple Experience with UserExperiences Model
    }
    public function property()
    {
        return $this->hasMany(Properties::class, 'user_id',); //user can have multiple Experience with UserExperiences Model
    }
    public function Experience()
    {
        return $this->hasMany(UserExperiences::class, 'user_id',); //user can have multiple Experience with UserExperiences Model
    }

    public function Language()
    {
        return $this->hasMany(UserLanguages::class, 'user_id'); //user can have multiple Experience with UserExperiences Model
    }

    public function Question()
    {
        return $this->hasMany(UserQuestions::class, 'user_id'); //user can have multiple Experience with UserExperiences Model
    }
    public static function realEstateAgentBuyer()
    {
        $user = User::with('Education', 'Experience', 'Language', 'Question', 'Skills')->where('is_buyer', '=', 1)->get();
        return $user;
    }
    public static function realEstateAgentBuyerByCity($request)
    {
        $user = User::with('Education', 'Experience', 'Language', 'Question', 'Skills')->where([['is_buyer', 1], ['city', $request->search]])->get();
        return $user;
    }

    public static function realEstateAgentSeller()
    {
        $user = User::with('Education', 'Experience', 'Language', 'Question', 'Skills')->where('is_seller', '=', 1)->get();
        return $user;
    }

    public static function realEstateAgentSellerByCity($request)
    {
        $user = User::with('Education', 'Experience', 'Language', 'Question', 'Skills')->where([['is_seller', 1], ['city', $request->search]])->get();
        return $user;
    }
    public static function realEstateAgentBoth()
    {
        $user = User::with('Education', 'Experience', 'Language', 'Question', 'Skills')->where([['is_buyer', 1], ['is_seller', 1]])->get();
        return $user;
    }

    public static function realEstateAgentBothByCity($request)
    {
        $user = User::with('Education', 'Experience', 'Language', 'Question', 'Skills')->where([['is_buyer', 1], ['is_seller', 1], ['city', $request->search]])->get();
        return $user;
    }

    public static function realEstateAgentById($id)
    {
        $user = User::with('Education', 'Experience', 'Language', 'Question', 'Skills')->where('id', '=', $id)->get()
            ->each(function ($user) {
                $user['review_statistics'] = $user->getReviewStatistics();
            });

        return $user;
    }

    public static function realEstateAgentByUserId($id)
    {
        $user = User::where('id', '=', $id)->where('role_id', '=', '2')->get()->toArray();

        return $user;
    }

    // Code by Shehzad Bhai
    public function skills()

    {
        return $this->hasOne(UserSkills::class, 'user_id', 'id');
    }
    public function questions()
    {
        return $this->hasOne(UserQuestions::class, 'user_id', 'id');
    }

    public function languages()
    {
        return $this->hasOne(UserLanguages::class, 'user_id', 'id');
    }

    public function experince()
    {
        return $this->hasOne(UserExperiences::class, 'user_id', 'id');
    }

    public function education()

    {
        return $this->hasMany(UserEducations::class, 'user_id', 'id');
    }

    static function checkUser($email)
    {
        return User::where('email', $email)
            ->with('role')
            ->with('questions')
            ->with('languages')
            ->with('experince')
            ->get()->toArray();
    }
    public function role()
    {
        return $this->belongsTo(UserRoles::class, 'role_id', 'id');
    }
    public function favorite_property()
    {
        return $this->belongsToMany(Properties::class, 'favorite_property');
    }
    public function reviewByUser()
    {
        return $this->hasMany(Reviews::class, 'agent_id', 'id')->where('verified', 'yes');
    }

    public function getReviewStatistics()
    {
        $reviewsCount = $this->reviewByUser()->count();
        $averageRating = $this->reviewByUser()->avg('rating');

        return [
            'count' => $reviewsCount,
            'average_rating' => $averageRating,
        ];
    }

    public function agentLeads()
    {
        return $this->belongsTo(AgentLeads::class, 'id', 'agent_id');
    }

    public function agentTeams()
    {
        return $this->belongsTo(AgentTeam::class, 'id', 'agent_team_id');
    }
}
