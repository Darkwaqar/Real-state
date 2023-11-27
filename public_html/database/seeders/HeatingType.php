<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeatingType extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'heating_types';
    protected $fillable = [
        'id',
        'HeatingTypeName',
        'HeatingTypeIcon',
        'HeatingTypeSelectedIcon',
        'Status',
        'created_at',
        'updated_at'
   ];
    public function heatingTypes()
    {
         return $this->belongsToMany(HeatingType::class,
        'property_heating_types','heating_types_id','mlsproperties_id' );
    }
}
