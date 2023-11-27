<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCondition extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'mlsproperty_conditions';
    protected $fillable = ['ConditionName', 'Status',
    'created_at',
    'updated_at'];

    public function PropertyCondition()
    {
        return $this->belongsToMany(Properties::class,
        'property_condition_rels','mlsproperty_conditions_id','mlsproperties_id');
    }
}
