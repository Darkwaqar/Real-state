<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPossession extends Model
{
    use HasFactory;
    protected $table = 'property_possessions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlspossessions_id','created_at','updated_at'
    ];
    public static function PropertyPossession($id)
   {
   $PropertyPossession = Properties::whereid($id)
   ->with(['PropertyPossession' =>function ($query) {
       $query->select('mlsproperties_id', 'PossessionsName');
   }])->find($id);
   return $PropertyPossession;
   }
}
