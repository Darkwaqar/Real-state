<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyParking extends Model
{
    use HasFactory;
    protected $table = 'property_parkings';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsparking_features_id','created_at','updated_at'
    ];
    public static function ParkingFeature($id)
    {
    $ParkingFeature = Properties::whereid($id)
    ->with(['ParkingFeature' =>function ($query) {
        $query->select('mlsproperties_id', 'ParkingFeatureName');
    }])->find($id);
    return $ParkingFeature;
    }
}
