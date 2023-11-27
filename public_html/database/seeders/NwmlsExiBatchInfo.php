<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NwmlsExiBatchInfo extends Model
{
    use HasFactory,SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'nwmls_exi_batch_infos';
    protected $fillable = ['id',
    'insert_batch_ran_id','count_properties','deleted_at','created_at',
    'updated_at'
    ];

}//class here
