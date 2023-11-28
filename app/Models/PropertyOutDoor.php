<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyOutDoor extends Model
{
    use HasFactory;

    protected $table = 'property_outdoor_amenities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','outdoor_amenities_id','created_at','updated_at'
    ];


}
