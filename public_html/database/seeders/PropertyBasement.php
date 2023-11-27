<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyBasement extends Model
{
    use HasFactory;
    protected $table = 'mlsproperty_basements';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsbasement_id','created_at','updated_at'
    ];
   public static function PropertyBasement($id)
   {
   $PropertiesBasements = Properties::whereid($id)
   ->with(['Basement' =>function ($query) {
       $query->select('mlsproperties_id', 'BasementName');
   }])->find($id);
   return $PropertiesBasements;
   }
}
