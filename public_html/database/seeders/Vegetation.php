<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetation extends Model
{
    use HasFactory;
    protected $table = 'mlsvegetations';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'VegetationName',
        'Status',
        'created_at',
        'updated_at',
    ];

    public function PropertyVegetation()
    {
        return $this->belongsToMany(Properties::class,
        'property_vegetations','mlsvegetations_id','mlsproperties_id');
    }
}
