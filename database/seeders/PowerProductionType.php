<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerProductionType extends Model
{
    use HasFactory;
    protected $table = 'mlspower_production_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'ProductionTypeName',
        'Status',
        'created_at',
        'updated_at',
];

    public function PowerProduction(){
        return $this->belongsToMany(Properties::class,
        'property_power_production','mlspower_production_types_id','mlsproperties_id');
    }
}
