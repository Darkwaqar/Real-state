<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyLotFeatures extends Model
{
    use HasFactory;
    protected $table = 'property_lot_features';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlslot_features_id','created_at','updated_at'
    ];
    public static function LotFeature($id)
    {
    $Utilities = Properties::whereid($id)
    ->with(['LotFeatures' =>function ($query) {
        $query->select('mlsproperties_id', 'LotFeatureName');
    }])->find($id);
    return $Utilities;
    }
}
