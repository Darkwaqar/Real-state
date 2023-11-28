<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FavoriteProperty extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'favorite_property';
    protected $primaryKey = 'id';
    protected $fillable = [
        'properties_id',
        'user_id',
        'is_fav',
        'deleted_at'
   ];

//    public function userfavProperties(){
     
//     return $this->belongsTo(User::class,'buyer_id','id');
// } 

// public function savProperties(){
     
//     return $this->belongsTo(Properties::class,'id','property_id');
// } 
    public function userfavProperties()
    {
        return $this->belongsTo(Properties::class, 'properties_id', 'id');
    }
    public function savProperties()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function prefferedMedia()
    {
        return $this->hasMany(Media::class, 'mlsproperties_id', 'property_id')->where('PreferredPhotoYN', 1);

    }

    public static function savedProperties(){

        $saved = FavoriteProperty::with('userfavProperties')->get();
    }


   

}
