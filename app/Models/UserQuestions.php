<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserQuestions extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'user_questions';
    protected $fillable = [
        'user_id',
        'active_license_status',
        'license_number',
        'deals_completed',
        'license_suspension_ten_years_status',
        'real_estate_assoc_disciplined_status',
        'license_under_investigation_status',
        'license_restriction_status',
        'license_unrestricted_status',
        'deals_exclude_lease_completed',
        'real_estate_assoc_name',
    ];

    public function Question(){

        return $this->belongsTo(User::class, 'id', 'user_id'); //has many relationship with user model
    }

}
