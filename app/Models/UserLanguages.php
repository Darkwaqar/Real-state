<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserLanguages extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'user_languages';
    protected $fillable = [
        'user_id',
        'language',
        'fluency_level',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    public function Language(){

        return $this->belongsTo(User::class, 'id', 'user_id'); //has many relationship with user model
    }
}
