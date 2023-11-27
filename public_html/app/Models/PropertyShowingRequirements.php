<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyShowingRequirements extends Model
{
    use HasFactory;
    protected $table = 'property_showing_requirements';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsshowing_requirements_id','created_at','updated_at'
    ];

}
