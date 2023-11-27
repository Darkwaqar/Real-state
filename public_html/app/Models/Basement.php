<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basement extends Model
{
    use HasFactory;
    protected $table = 'mlsbasements';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'BasementName',
        'Status',
        'BasementIcon',
        'BasementSelectedIcon',
        'created_at',
        'updated_at',
    ];

    public function properties(){
        return $this->belongsToMany(Properties::class,
        'mlsproperty_basements','mlsbasement_id','mlsproperties_id');
    }
}
