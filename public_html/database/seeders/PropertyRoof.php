<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyRoof extends Model
{
    use HasFactory;
    protected $table = 'property_roofs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsroofs_id','created_at','updated_at'
    ];
    public static function PropertyRoofs($id)
    {
    $PropertyRoofs = Properties::whereid($id)
    ->with(['PropertyRoof' =>function ($query) {
        $query->select('mlsproperties_id', 'RoofName');
    }])->find($id);
    return $PropertyRoofs;
    }
}
