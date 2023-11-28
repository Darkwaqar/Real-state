<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyArchitecturalStyle extends Model
{
    use HasFactory;
    protected $table = 'mlsproperty_architectural';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsarchitectural_styles_id','created_at','updated_at'
    ];
    public static function PropertyArchitectural($id)
    {
        // $PropertiesArchitecturalStyles = Properties::whereid($id)
        // ->with(['ArchitecturalStyle' =>function ($query) {
        //     $query->select('mlsproperties_id', 'ArchitecturalName');
        // }])->find($id);
        // return $PropertiesArchitecturalStyles;
        $PropertiesArchitecturalStyles = Properties::with(['ArchitecturalStyle' => function ($query) {
            $query->select('mlsproperties_id', 'ArchitecturalName');
        }])->find($id);
        return $PropertiesArchitecturalStyles;
    }
}
