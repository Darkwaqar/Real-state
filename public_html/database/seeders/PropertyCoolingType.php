<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCoolingType extends Model
{
    use HasFactory;
    protected $table = 'cooling_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'CoolingTypeName',
        'Status',
        'CoolingTypeIcon',
        'CoolingTypeSelectedIcon',
        'created_at',
        'updated_at',
    ];
}
