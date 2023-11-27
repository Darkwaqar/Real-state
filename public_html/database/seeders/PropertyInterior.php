<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyInterior extends Model
{
    use HasFactory;
    protected $table = 'mlsproperty_interiors';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mls_interior_features_id','created_at','updated_at'
    ];
    public static function PropertyInterior($id)
    {
    $PropertiesAppliances = Properties::whereid($id)
    ->with(['Interior' =>function ($query) {
        $query->select('mlsproperties_id', 'InteriorFeatureName');
    }])->find($id);
    return $PropertiesAppliances;
    }
}
