<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoolingType extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'cooling_types';
    protected $fillable = ['CoolingTypeName', 'CoolingTypeIcon', 'CoolingTypeSelectedIcon',
            'created_at',
            'updated_at',
        ];
    public function coolingTypes()
    {
         return $this->belongsToMany(Properties::class,
        'property_cooling_types','cooling_types_id','mlsproperties_id' );
    }
}
