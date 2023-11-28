<?php

namespace App\Models;
use App\Models\page;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagecontent extends Model
{
    use HasFactory;
    function getbyid($id){
       $data = pagecontent::select('id','type','content')->where('page_id', $id)->get(); 
       return $data;

    }
    function savecontent($id,$content){
        $data =  pagecontent::find($id);
        $data->content = $content;
        return $data->save();
     }
}
