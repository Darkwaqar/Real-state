<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyView extends Model
{
    use HasFactory;
    protected $table = 'mlsproperty_views';
    protected $fillable = [
        'id',
        'ProperyViewName',
        'Status',
        'ProperyViewSelectedIcon',
        'ProperyViewIcon',
        'created_at',
        'updated_at',
    ];
    protected $primaryKey = 'id';

    public function PropertyView()
    {
        return $this->belongsToMany(Properties::class,
        'properties_views','mlsproperty_views_id','mlsproperties_id');
    }
}
