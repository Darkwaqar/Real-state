<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyListingConditions extends Model
{
    use HasFactory;
    protected $table = 'property_spe_listing';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsspecial_listing_conditions_id','created_at','updated_at'
    ];
}
