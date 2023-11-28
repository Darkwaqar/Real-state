<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserExperiences extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'user_experiences';
    protected $fillable = [
        'user_id',
        'job_title',
        'company',
        'from_date',
        'to_date',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    public function Experience(){

        return $this->belongsTo(User::class, 'id', 'user_id'); //has many relationship with user model
    }

}
