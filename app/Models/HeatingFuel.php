<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeatingFuel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'heating_fuels';
    //protected $fillable = ['HeatingFuelName', 'HeatingFuelIcon', 'HeatingFuelSelectedIcon'];
    protected $fillable = [
        'id',
        'HeatingFuelName',
        'HeatingFuelIcon',
        'HeatingFuelSelectedIcon',
        'Status',
        'created_at',
        'updated_at'
   ];
    public function properties()
    {
         return $this->belongsToMany(Properties::class,
        'property_heating_fuels','heating_fuels_id','mlsproperties_id' );
    }
}
