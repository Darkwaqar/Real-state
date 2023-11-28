<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutDoor extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'outdoor_amenities';
    protected $fillable = [
        'OutdooramenityName','OutdooramenityIcon','OutdooramenitySelectedIcon','Status'
        ,'created_at'
        ,'updated_at',
    ];

    public function outdoorAmenities()
    {
        return $this->belongsToMany(OutDoor::class,
        'property_outdoor_amenities','outdoor_amenities_id','mlsproperties_id' );
    }
}
