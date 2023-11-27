<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propertyutilities extends Model
{
    use HasFactory;
    protected $table = 'propertyutilities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsutilities_id','created_at','updated_at'
    ];
    public static function PropertyUtilities($id)
    {
    $Utilities = Properties::whereid($id)
    ->with(['Utilities' =>function ($query) {
        $query->select('mlsproperties_id', 'UtilityName');
    }])->find($id);
    return $Utilities;
    }
}
