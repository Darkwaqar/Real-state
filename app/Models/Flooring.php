<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flooring extends Model
{
    use HasFactory;
    protected $table = 'mlsfloorings';
   // protected $fillable = ['FloringName'];
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'FloringName',
        'FloringeIcon',
        'FloringSelectedIcon',
        'Status',
        'created_at',
        'updated_at'
   ];
    public function properties()
    {
        return $this->belongsToMany(Properties::class,
        'mlsproperty_floorings','mlsproperty_floorings_id','mlsproperties_id');
    }
}
