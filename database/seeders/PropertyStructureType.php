<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyStructureType extends Model
{
    use HasFactory;
    protected $table = 'property_structure_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsstructure_types_id','created_at','updated_at'
    ];
    public static function StructureTypeName($id)
    {
    $PropertyStructure = Properties::whereid($id)
    ->with(['StructureType' =>function ($query) {
        $query->select('mlsproperties_id', 'StructureTypeName');
    }])->find($id);
    return $PropertyStructure;
    }
}
