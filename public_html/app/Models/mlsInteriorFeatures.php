<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mlsInteriorFeatures extends Model
{
    use HasFactory;
    protected $table = 'mls_interior_features';
    //protected $fillable = ['InteriorFeatureName'];
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'InteriorFeatureName',
        'InteriorFeatureIcon',
        'InteriorFeatureSelectedIcon',
        'Status',
        'created_at',
        'updated_at'
   ];
    public function InteriorFeature(){
        return $this->belongsToMany(Properties::class, 'mlsproperty_interiors','mls_interior_features_id','mlsproperties_id');
    }

}
