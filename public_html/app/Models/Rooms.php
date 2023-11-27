<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $table = 'mlsrooms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','RoomKey','RoomLevel','RoomType','created_at','updated_at'
    ];

}
