<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roof extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'mlsroofs';
    protected $fillable = [
        'id',
        'RoofName',
        'Status',
        'RoofIcon',
        'RoofSelectedIcon',
        'created_at',
        'updated_at',
    ];

    public function Roofs()
    {
        return $this->belongsToMany(Properties::class,
        'property_roofs','mlsroofs_id','mlsproperties_id');
    }
}
