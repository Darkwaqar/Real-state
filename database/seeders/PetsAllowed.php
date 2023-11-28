<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetsAllowed extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'mlspets_alloweds';
    protected $fillable = [
        'PetsAllowedName',
        'Status',
        'created_at',
        'updated_at',
    ];

}
