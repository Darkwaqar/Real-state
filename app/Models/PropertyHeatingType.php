<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyHeatingType extends Model
{
    use HasFactory;
    protected $table = 'property_heating_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'mlsproperties_id',
        'heating_types_id',
        'created_at',
        'updated_at',
    ];
}
