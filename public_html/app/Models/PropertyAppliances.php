<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAppliances extends Model
{
    use HasFactory;
    protected $table = 'mlsproperty_appliances';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsappliances_id','created_at','updated_at'
    ];
    public static function PropertyAppliance($id)
    {
        $PropertiesAppliances = Properties::with(['Appliances' => function ($query) {
            $query->select('mlsproperties_id', 'ApplianceName');
        }])->find($id);
        return $PropertiesAppliances;

        // $PropertiesAppliances = Properties::whereid($id)
        // ->with(['Appliances' =>function ($query) {
        //     $query->select('mlsproperties_id', 'ApplianceName');
        // }])->find($id);
        // return $PropertiesAppliances;
    }
}
