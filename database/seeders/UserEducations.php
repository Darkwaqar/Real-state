<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserEducations extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'user_educations';
    protected $fillable = [
        'id',
        'user_id',
        'school_university',
        'degree',
        'study_field',
        'overall_result',
        'from_date',
        'deleted_at',
        'to_date',
        'created_at',
        'updated_at',
    ];

    public function Education(){

        return $this->belongsTo(User::class,'user_id'); //has many relationship with user model
    }

}

