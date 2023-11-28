<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StructureType extends Model
{
    use HasFactory;
    protected $table = 'mlsstructure_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'StructureTypeName',
        'Status',
        'structure_icon',
        'structure_selected_icon',
        'created_at',
        'updated_at',
        'order'
    ];

    public function properties()
    {
        return $this->belongsToMany(Properties::class,
         'property_structure_types','mlsstructure_types_id','mlsproperties_id');
    }
    public static function countCategories()
    {
        return DB::select('select count(*) as count,
        (select mlsstructure_types.StructureTypeName from mlsstructure_types where mlsstructure_types.id=property_structure_types.mlsstructure_types_id) as StructureTypeName,
        (select mlsstructure_types.structure_icon from mlsstructure_types where mlsstructure_types.id=property_structure_types.mlsstructure_types_id) as structure_icon
        from property_structure_types group by property_structure_types.mlsstructure_types_id');
        // return $results = DB::table('property_structure_types')
        // ->select(
        //     DB::raw('COUNT(*) as count'),
        //     'mlsstructure_types.StructureTypeName',
        //     'mlsstructure_types.structure_icon'
        // )
        // ->join('mlsstructure_types', 'mlsstructure_types.id', '=', 'property_structure_types.mlsstructure_types_id')
        // ->groupBy('property_structure_types.mlsstructure_types_id')
        // ->get();
    }

}//class here
