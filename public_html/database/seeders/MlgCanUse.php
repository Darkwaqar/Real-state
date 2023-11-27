<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MlgCanUse extends Model
{
    use HasFactory;
    protected $table = 'mlsmlg_can_uses';
    protected $fillable = ['MlgUseName'];

}
