<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyVegetation extends Model
{
    use HasFactory;
    protected $table = 'property_vegetations';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsvegetations_id','created_at','updated_at'
    ];
    public static function PropertyVegetation($id)
    {
    $PropertyVegetation = Properties::whereid($id)
    ->with(['PropertyVegetation' =>function ($query) {
        $query->select('mlsproperties_id', 'VegetationName');
    }])->find($id);
    return $PropertyVegetation;
    }
}
