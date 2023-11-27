<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumComment extends Model
{
    use HasFactory;

    protected $fillable = ['thread_id','forum_thread_id','forum_comment_id', 'comment_id', 'content', 'user_id'];

    public function thread()
    {
        return $this->belongsTo(ForumThread::class, 'forum_thread_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parentComment()
    {
        return $this->belongsTo(ForumComment::class, 'forum_comment_id');
    }

    public function childComments()
    {
        return $this->hasMany(ForumComment::class, 'forum_comment_id');
    }
}
