<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialListingConditions extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'mlsspecial_listing_conditions';
    protected $fillable = ['id','ListConditionName','Status','created_at','updated_at'];

    public function SpecialListingConditions()
    {
        return $this->belongsToMany(Properties::class,
        'property_spe_listing','mlsspecial_listing_conditions_id','mlsproperties_id');
    }
}
