<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyLevel extends Model
{
    use HasFactory;
    protected $table = 'mlsproperty_levels';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlslevels_id','created_at','updated_at'
    ];
    public static function PropertyLevel($id)
   {
   $PropertiesLevel = Properties::whereid($id)
   ->with(['PropertyLevel' =>function ($query) {
       $query->select('mlsproperties_id', 'LevelsName');
   }])->find($id);
   return $PropertiesLevel;
   }
}
