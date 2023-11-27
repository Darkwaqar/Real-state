<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPetsAllowed extends Model
{
    use HasFactory;
    protected $table = 'property_pets_alloweds';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlspets_alloweds_id','created_at','updated_at'
    ];
}
