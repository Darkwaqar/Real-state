<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentlyViewedProperties extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'property_id'];

    public function user()
    {
        return $this->belongsTo(User::class ,'user_id', 'id');
    }

    public function property()
    {
        return $this->belongsTo(Properties::class,'property_id', 'id');
    }
}
