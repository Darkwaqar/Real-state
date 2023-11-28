<?php


namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class AgentLeads extends Authenticatable



{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'agent_leads';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'city',
        'question',
        'agent_id',
        'lead_type',
        'deleted_at',
        'created_at',
        'updated_at',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'agent_id', 'id');
    }


    public function agentLeads(){
        $agent = AgentLeads::with('user')->get();
        return $agent;

    }

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->fromDateTime($value),
            set: fn ($value) => $this->fromDateTime($value),
        );
    }
    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->fromDateTime($value),
            set: fn ($value) => $this->fromDateTime($value),
        );

    }













}



