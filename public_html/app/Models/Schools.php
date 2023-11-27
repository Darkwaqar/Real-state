<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'schools';
    protected $fillable = ['id','property_id','universal-id','nces-id','state-id','name',
                            'school-summary','type','level_codes','level','street','city',
                            'state','fipscounty','zip','phone','fax','county','lat','lon',
                            'district_name','district-id','website','overview-url','rating','year',
                        'rating-description','distance','deleted_at','created_at','updated_at','deleted_at'];

    public function schoolRating()
    {
        return $this->hasOne(SchoolSubrating::class, 'universal_id', 'universal-id');
    } 

}
