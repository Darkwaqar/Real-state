<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class WaterSource extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'mlswater_sources';
    protected $fillable = [
        'id',
        'WaterSourceName',
        'Status',
        'created_at',
        'updated_at'
    ];

    public function WaterSource()
    {
        return $this->belongsToMany(Properties::class,
        'property_water_sources','mlswater_sources_id','mlsproperties_id');
    }


}
