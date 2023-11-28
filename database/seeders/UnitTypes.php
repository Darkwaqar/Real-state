<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitTypes extends Model
{
    use HasFactory;
    protected $table = 'unit_types';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'mlsproperties_id',
        'UnitTypeKey',
        'UnitName',
        'UnitTypeBathsTotal',
        'UnitTypeBedsTotal',
        'UnitDishwasher',
        'UnitFireplaces',
        'UnitRangeOven',
        'UnitRefrigerator',
        'UnitTypeActualRent',
        'UnitSquareFeet',
        'created_at',
        'updated_at',
    ];

}
