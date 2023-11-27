<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'mlssewers';
    protected $fillable = ['id','SewerName','Status','created_at','updated_at'];

    public function propertySewer()
    {
        return $this->belongsToMany(Properties::class,
        'property_sewers','mlssewers_id','mlsproperties_id');
    }

}
