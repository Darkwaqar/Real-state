<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];

    public function properties()
    {
        return $this->belongsToMany(Properties::class,
         'property_structure_types','mlsstructure_types_id','mlsproperties_id');
    }
}
