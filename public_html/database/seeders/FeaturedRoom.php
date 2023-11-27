<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedRoom extends Model
{
    use HasFactory;

    protected $table = 'featured_rooms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'RoomName',
        'RoomIcon',
        'RoomSelectedIcon',
        'Status',
        'created_at',
        'updated_at'
   ];

   public function featuredRoom(){
    return $this->belongsToMany(Properties::class, 'property_featured_rooms','featured_rooms_id','mlsproperties_id');
}
}
