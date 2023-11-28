<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundationDetails extends Model
{
    use HasFactory;
    protected $table = 'mlsfoundation_details';
    //protected $fillable = ['FoundationDetailsName'];
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'FoundationDetailsName',
        'FoundationDetailsIcon',
        'FoundationDetailsSelectedIcon',
        'Status',
        'created_at',
        'updated_at'
   ];
    public function FoundatationDetails()
    {
         return $this->belongsToMany(Properties::class,
         'mlsproperty_foundation_details','mlsfoundation_details_id','mlsproperties_id');
    }
}
