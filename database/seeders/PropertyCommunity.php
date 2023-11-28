<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCommunity extends Model
{
    use HasFactory;
    protected $table = 'property_communities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlscommunity_features_id','created_at','updated_at'
    ];
    public static function PropertyCommunity($id)
   {
   $PropertiesCommunity = Properties::whereid($id)
   ->with(['CommunityFeatures' =>function ($query) {
       $query->select('mlsproperties_id', 'CommunityFeatureName');
   }])->find($id);
   return $PropertiesCommunity;
   }
}
