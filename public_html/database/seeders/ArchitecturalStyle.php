<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchitecturalStyle extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'mlsarchitectural_styles';
    protected $fillable = [
        'ArchitecturalName',
        'ArchitecturalIcon',
        'ArchitecturalSelectedIcon',
        'Status',
        'created_at',
        'updated_at',
    ];

    public function Architechtural()
    {
        return $this->belongsToMany(Properties::class,
        'mlsproperty_architectural_styles','mlsarchitectural_styles_id','mlsproperties_id');
    }
}
