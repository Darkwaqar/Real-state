<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyConditionRel extends Model
{
    use HasFactory;
    protected $table = 'property_condition_rels';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsproperty_conditions_id','created_at','updated_at'
    ];
    public static function PropertyCondition($id)
   {
   $PropertyCondition = Properties::whereid($id)
   ->with(['PropertyCondition' =>function ($query) {
       $query->select('mlsproperties_id', 'ConditionName');
   }])->find($id);
   return $PropertyCondition;
   }
}
