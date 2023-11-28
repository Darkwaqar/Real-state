<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function threads()
    {
        // dd("Hi");
        return $this->hasMany(ForumThread::class);
    }
}
