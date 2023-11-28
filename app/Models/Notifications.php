<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'notifications';
    protected $fillable = [
    'id','user_id','property_id','title','message','status','source','link','is_read','is_archived',
        'priority','icon','link','type','agent_id','forum_id','created_at','updated_at'
];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function properties()
    {
        return $this->belongsTo(Properties::class, 'property_id', 'id');
    }

    public function agents()
    {
        return $this->belongsTo(User::class, 'agent_id', 'id');
    }
    public function topic()
    {
        return $this->belongsTo(ForumThread::class, 'forum_id', 'id');
    }
}
