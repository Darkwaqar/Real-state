<?php
namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;
use Laravel\Sanctum\HasApiTokens;
class PropertyLeads extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    /**
     * The attributes that are mass assignable
     *

     * @var array<int, string>
     */
    protected $table = 'property_leads';
    protected $primaryKey = 'id';
    protected $fillable = [
        'address',
        'city',
        'state',
        'property_type',
        'message',
        'name',
        'email',
        'contact',
        'plan_to_sell_home',
        'any_agent',
        'lead_type',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function lead_value()
    {
        return $this->belongsTo(LeadValue::class, 'lead_value_id', 'id');
    }

    public function lead_purchased(){
        return $this->belongsTo(WalletDebit::class, 'id', 'lead_id')->where('agent_id' , getUserId());
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }



    // public function agentLeads(){







    //     $agent = AgentLeads::with('user')->get();







    //     return $agent;







    // }















}



