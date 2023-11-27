<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Reviews extends Model
{
    use HasFactory, SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'reviews';
    protected $fillable = [
        'id',
        'user_id',
        'agent_id',
        'rating',
        'content',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    public function reviewByUser(){
        return $this->belongsTo(User::class, 'user_id', 'id');
        
    }
    public function reviewByAgent(){
        return $this->belongsTo(User::class, 'agent_id', 'id');
        
    }

    
    public static function getAgentReviews($id){
       return  Reviews::with('reviewByUser')->where('agent_id',$id)->where('verified', '=', 'yes')->orderBy('verified_on','DESC')->get()->toArray();
    }

    
    public static function agentReviews($id){
        return  Reviews::with('reviewByUser')->where('agent_id',$id)->orderBy('created_at', 'DESC')->get()->toArray();
     }

    public static function getAgentsByReviews(){
        return  Reviews::with('reviewByAgent')->groupBy('agent_id')->get()->toArray();
     }

}
