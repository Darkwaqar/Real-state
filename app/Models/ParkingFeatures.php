<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingFeatures extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'mlsparking_features';
    protected $fillable = [
        'ParkingFeatureName',
        'ParkingFeatureIcon',
        'ParkingFeatureSelectedIcon',
        'Status',
        'created_at',
        'updated_at',
    ];

    public function properties()
    {
        return $this->belongsToMany(Properties::class,
        'property_parkings','mlsparking_features_id','mlsproperties_id');
    }
}
