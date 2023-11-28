<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $table = 'mlsmedia';
    protected $primaryKey = 'id';
   protected $fillable = [
    'mlsproperties_id','MediaKey',
   'MediaObjectID','MediaModificationTimestamp','Order','status','wherfrom',
   'PreferredPhotoYN','LongDescription','ImageWidth','ImageHeight','ImageSizeDescription',
   'MediaURL','s3buckettempurl','created_at','updated_at'
];


   public function Properties()
    {
        return $this->belongsTo(Properties::class,'mlsproperties_id', 'id');
    }
    public static  function ProMedia($id)
    {

        $Properties = Media::withcount('Properties')->where('mlsproperties_id','=', $id)->get()->toArray();
          return $Properties;
    }

    public static  function mediaCount($id)
    {
      $posts = Properties::withcount('media')->whereHas('media', function ($query) use ($id) {
        $query->where('mlsproperties_id', $id);
    })->get()->toArray();
    return $posts;

    }
    public static  function topThree($id)
    {

        $Properties = Media::where('mlsproperties_id','=', $id)->orderBy('Order', 'asc')->limit(3)->get()->toArray();
          return $Properties;
    }
 }
