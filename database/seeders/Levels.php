<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    use HasFactory;
    protected $table = 'mlslevels';
    //protected $fillable = ['LevelsName'];
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'LevelsName',
        'Status',
        'created_at',
        'updated_at'
   ];
    public function PropertyLevel()
    {
        return $this->belongsToMany(Properties::class,
         'mlsproperty_levels','mlslevels_id','mlsproperties_id');
    }
}
