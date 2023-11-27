<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GreenEnergyEfficient extends Model
{
    use HasFactory;
    protected $table = 'mlsgreen_energy_efficients';
    //protected $fillable = ['GreenEnergyName'];
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'GreenEnergyName',
        'Status',
        'created_at',
        'updated_at'
   ];
    public function GreenEnergy()
    {
        return $this->belongsToMany(Properties::class,
         'property_green_energies','mlsgreen_energy_efficients_id','mlsproperties_id');
    }
}
