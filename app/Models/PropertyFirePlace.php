<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFirePlace extends Model
{
    use HasFactory;
    protected $table = 'mlsproperty_fire_places';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsfireplace_features_id','created_at','updated_at'
    ];
    public static function propertyFireplacefeatures($id)
    {
        // $PropertyFirePlaceFeature = Properties::whereid($id)
        // ->with(['propertyFireplacefeatures' =>function ($query) {
        //     $query->select('mlsproperties_id', 'FirePlaceName');
        // }])->find($id);
        // return $PropertyFirePlaceFeature;
        $PropertyFirePlaceFeature = Properties::find($id);
        if (!$PropertyFirePlaceFeature) {
            return null;
        }
        $PropertyFirePlaceFeature->load(['propertyFireplacefeatures' => function ($query) {
            $query->select('mlsproperties_id', 'FirePlaceName');
        }]);
        return $PropertyFirePlaceFeature;
    }

}
