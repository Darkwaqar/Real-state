<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyWaterSource extends Model
{
    use HasFactory;
    protected $table = 'property_water_sources';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlswater_sources_id','created_at','updated_at'
    ];
    public static function WaterSource($id)
    {
    $PropertyWaterSource = Properties::whereid($id)
    ->with(['WaterSource' =>function ($query) {
        $query->select('mlsproperties_id', 'WaterSourceName');
    }])->find($id);
    return $PropertyWaterSource;
    }
}
