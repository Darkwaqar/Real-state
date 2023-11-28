<?php

namespace App\Models;

use App\Models\PropertyAppliances as ModelsPropertyAppliances;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\PropertyAppliances;

class Appliances extends Model
{
    use HasFactory;
    protected $table = 'mlsappliances';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'ApplianceName',
        'ApplianceIcon',
        'ApplianceSelectedIcon',
        'Status',
        'created_at',
        'updated_at',
    ];

    public function properties()
    {
        return $this->belongsToMany(Properties::class,
         'mlsproperty_appliances','mlsappliances_id','mlsproperties_id');
    }



}
