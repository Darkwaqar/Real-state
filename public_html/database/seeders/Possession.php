<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Possession extends Model
{
    use HasFactory;
    protected $table = 'mlspossessions';
    protected $primaryKey = 'id';
    protected $fillable = [
    'PossessionsName',
    'Status',
    'created_at',
    'updated_at',
    ];

    public function PropertyPossession()
    {
        return $this->belongsToMany(Properties::class,
         'property_possessions','mlspossessions_id','mlsproperties_id');
    }
}
