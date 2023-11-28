<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireplaceFeatures extends Model
{
    use HasFactory;
    protected $table = 'mlsfireplace_features';
    //protected $fillable = ['FirePlaceName'];
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'FirePlaceName',
        'FirePlaceIcon',
        'FirePlaceSelectedIcon',
        'Status',
        'created_at',
        'updated_at'
   ];
    public function propertyFireplaceFeatures()
    {
        return $this->belongsToMany(Properties::class,
         'mlsproperty_fire_places','mlsfireplace_features_id','mlsproperties_id');
    }
}
