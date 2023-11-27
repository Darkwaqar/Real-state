<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenHouseProperties extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'open_house_properties';
    protected $fillable = [
        'property_id',
        'openHouseKey',
        'nwmDeleted',
        'openHouseDate',
        'openHouseStartTime',
        'openHouseEndTime',
        'nwmTypeId',
        'modificationTimestamp',
        'originatingSystemName',
        'listingKey',
        'listingId',
        'mlgCanView',
        'mlgCanUse',
        'refreshments',
        'openHouseRemarks',
    ];

    public function openHouse()
   {
       return $this->belongsTo(Properties::class, 'property_id', 'id');
   }
}
