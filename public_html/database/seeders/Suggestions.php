<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suggestions extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'suggestions';
    protected $fillable = [
        'name',
        'email',
        'contact',
        'type',
        'city',
        'message',
        'user_id'
    ];
}
