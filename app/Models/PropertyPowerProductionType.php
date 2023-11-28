<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPowerProductionType extends Model
{
    use HasFactory;
    protected $table = 'property_power_production';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlspower_production_types_id','created_at','updated_at'
    ];
    public static function PropertyPowerProduction($id)
    {
        $PropertiesAppliances = Properties::whereid($id)
        ->with(['PowerProduction' =>function ($query) {
        $query->select('mlsproperties_id', 'ProductionTypeName');
    }])->find($id);
        return $PropertiesAppliances;
    }
}
