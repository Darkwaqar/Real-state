<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiesViews extends Model
{
    use HasFactory;
    protected $table = 'properties_views';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsproperty_views_id','created_at','updated_at'
    ];
    public static function PropertyView($id)
    {
    $PropertyView = Properties::whereid($id)
    ->with(['PropertyView' =>function ($query) {
        $query->select('mlsproperties_id', 'ProperyViewName');
    }])->find($id);
    return $PropertyView;
    }
}
