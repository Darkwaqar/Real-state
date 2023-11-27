<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyExterior extends Model
{
    use HasFactory;
    protected $table = 'mlsproperty_exteriors';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsexterior_features_id','created_at','updated_at'
    ];
    public static function Exterior($id)
    {
    $Exterior = Properties::whereid($id)
    ->with(['ExteriorFeaturs'=>function ($query) {
        $query->select('mlsproperties_id', 'ExterFeatureName');
    }])->find($id);
    return $Exterior;
    }

}

