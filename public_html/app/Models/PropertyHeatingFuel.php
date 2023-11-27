<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyHeatingFuel extends Model
{
    use HasFactory;
    protected $table = 'property_heating_fuels';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'mlsproperties_id',
        'heating_fuels_id',
        'created_at',
        'updated_at',
    ];
}
