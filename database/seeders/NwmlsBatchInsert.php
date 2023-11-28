<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NwmlsBatchInsert extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['id','currentLink','type',
        'statusMessage','random','nextLink','urlData','sizeOfurlData',
        'propertyAdded','created_at','updated_at','deleted_at'
    ];
}
