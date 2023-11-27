<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotFeatures extends Model
{
    use HasFactory;
    protected $table = 'mlslot_features';
    //protected $fillable = ['LotFeatureName'];
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'LotFeatureName',
        'Status',
        'created_at',
        'updated_at'
   ];
    public function LotFeature()
    {
        return $this->belongsToMany(Properties::class,
        'property_lot_features','mlslot_features_id','mlsproperties_id');
    }
}
