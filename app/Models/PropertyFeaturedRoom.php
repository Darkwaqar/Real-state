<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFeaturedRoom extends Model
{
    use HasFactory;
    protected $table = 'property_featured_rooms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','featured_rooms_id','created_at','updated_at'
    ];
}
