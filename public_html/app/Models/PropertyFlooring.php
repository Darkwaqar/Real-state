<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFlooring extends Model
{
    use HasFactory;
    protected $table = 'mlsproperty_floorings';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsfloorings_id','created_at','updated_at'
    ];
    public static function PropertyFlooring($id)
    {
    $Flooring = Properties::whereid($id)
    ->with(['propertyFlooring' =>function ($query)
    {
            $query->select('mlsproperties_id', 'FloringName');
    }     ])->find($id);
    return $Flooring;
    }
}
