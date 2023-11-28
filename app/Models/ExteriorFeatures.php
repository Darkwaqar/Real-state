<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExteriorFeatures extends Model
{
    use HasFactory;
    protected $table = 'mlsexterior_features';
    //protected $fillable = ['ExterFeatureName'];
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'ExterFeatureName',
        'Status',
        'ExterFeatureIcon',
        'ExterFeatureSelectedIcon',
        'created_at',
        'updated_at',
    ];
    public function properties()
    {
         return $this->belongsToMany(Properties::class,
         'mlsproperty_exteriors','mlsexterior_features_id','mlsproperties_id');
    }
}
