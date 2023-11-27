<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadValue extends Model
{
    use HasFactory;
    protected $table = 'lead_value';

    protected $fillable = [
        'value',
    ];
}
