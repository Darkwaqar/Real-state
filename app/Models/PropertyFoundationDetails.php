<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFoundationDetails extends Model
{
    use HasFactory;
    protected $table = 'mlsproperty_foundation_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlsfoundation_details_id','created_at','updated_at'
    ];
    public static function FoundationDetails($id)
    {
    $Foundation = Properties::whereid($id)
    ->with(['propertyFoundationDetails' =>function ($query)
    {
            $query->select('mlsproperties_id','FoundationDetailsName');
    }     ])->find($id);
    return $Foundation;
    }

}
