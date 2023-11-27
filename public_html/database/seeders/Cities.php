<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use League\CommonMark\Extension\Table\Table;

class Cities extends Model
{
    use HasFactory,SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'cities';
    protected $fillable = [
        'id',
        'name',
        'state_id',
        'created_at',
        'updated_at',
    ];

    // public function properties()
    // {
    //     return $this->hasMany(Properties::class);
    // }
}
