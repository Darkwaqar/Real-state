<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityFeatures extends Model
{
    protected $table = 'mlscommunity_features';
    protected $primaryKey = 'id';
    //protected $fillable = ['CommunityFeatureName'];
    protected $fillable = [
        'id',
        'CommunityFeatureName',
        'Status',
        'CommunityFeatureIcon',
        'CommunityFeatureSelectedIcon',
        'created_at',
        'updated_at',
    ];
    use HasFactory;

    public function properties()
    {
        return $this->belongsToMany(CommunityFeatures::class,
        'property_communities','mlscommunity_features_id','mlsproperties_id' );
    }
}
