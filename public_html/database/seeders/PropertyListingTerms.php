<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyListingTerms extends Model
{
    use HasFactory;
    protected $table = 'mlsproperty_listing_terms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','mlsproperties_id','mlslisting_terms_id','created_at','updated_at'
    ];
}
