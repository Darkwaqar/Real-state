<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertySewer extends Model
{
    use HasFactory;
    protected $table = 'property_sewers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlssewers_id','created_at','updated_at'
    ];
    public static function PropertySewer($id)
    {
    $PropertySewer = Properties::whereid($id)
    ->with(['PropertySewer' =>function ($query) {
        $query->select('mlsproperties_id', 'SewerName');
    }])->find($id);
    return $PropertySewer;
    }

}
