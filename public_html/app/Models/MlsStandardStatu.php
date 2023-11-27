<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MlsStandardStatu extends Model
{
    use HasFactory,SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'mls_standard_status';

    protected $fillable = ['id','name','value',
    'StandardName','random','status','lastInsertedDate','deleted_at','firstUrl', 'last_record_inserted_time'];

}
