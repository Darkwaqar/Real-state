<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilities extends Model
{
    use HasFactory;
    protected $table = 'mlsutilities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'UtilityName',
        'Status',
        'created_at',
        'updated_at',
    ];

    public function Utilities()
    {
        return $this->belongsToMany(Properties::class,
        'propertyutilities','mlsutilities_id','mlsproperties_id');
    }
}
