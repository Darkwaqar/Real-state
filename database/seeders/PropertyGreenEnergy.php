<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyGreenEnergy extends Model
{
    use HasFactory;
    protected $table = 'property_green_energies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsgreen_energy_efficients_id','created_at','updated_at'
    ];
    public static function GreenEnergy($id)
    {
    $GreenEnergy = Properties::whereid($id)
    ->with(['GreenEnergy' =>function ($query) {
        $query->select('mlsproperties_id', 'GreenEnergyName');
    }])->find($id);
    return $GreenEnergy;
    }
}
