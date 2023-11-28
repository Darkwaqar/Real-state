<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingTerms extends Model
{
    use HasFactory;
    protected $table = 'mlslisting_terms';
    //protected $fillable = ['TermName'];
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'TermName',
        'Status',
        'created_at',
        'updated_at'
   ];
    public function ListingTerm()
    {
        return $this->belongsToMany(Properties::class,
         'mlsproperty_listing_terms','mlslisting_terms_id','mlsproperties_id');
    }
}
