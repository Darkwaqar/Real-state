<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolSubrating extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'school_subratings';
    protected $fillable = [
        'id',
        'school_id',
        'universal_id',
        'test-scores-rating',
        'college-readiness-rating',
        'equity-rating',
        'academic-progress-rating',
        'student-growth-rating',
        'attendance-flag',
        'discipline-flag',
        'created_at',
        'updated_at'
   ];
   public function schoolrating()
   {
       return $this->hasOne(Schools::class, 'id', 'property_id');
   }

   public function schoolSubrating()
   {
       return $this->belongsTo(Schools::class, 'universal-id', 'universal_id');
   }
}
