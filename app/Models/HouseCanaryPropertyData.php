<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseCanaryPropertyData extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'house_canary_property_data';
    protected $fillable = [
        'id',
        'property_id',
        'property_block_crime',
        'property_details',
        'property_fema_disaster_area',
        'property_flood',
        'property_geo_features',
        'property_rental_value',
        'property_sales_history',
        'property_school',
        'property_tax_history',
        'property_value',
        'property_address_info',
        'created_at',
        'updated_at'
   ];
}
