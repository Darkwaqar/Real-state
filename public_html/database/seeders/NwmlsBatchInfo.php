<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NwmlsBatchInfo extends Model
{
    use HasFactory,SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'nwmls_batch_infos';
    protected $fillable = [
        'id',
        'batch_insert_id','urlData','sizeOfurlData','propertyAdded','deleted_at','created_at',
        'updated_at',
];

}//class here
