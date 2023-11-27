<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCoolingType extends Model
{
    use HasFactory;
    protected $table = 'property_cooling_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'mlsproperties_id',
        'cooling_types_id',
        'created_at',
        'updated_at',
    ];
}
