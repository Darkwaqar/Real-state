<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExtraLinkTable extends Model
{
    use HasFactory,SoftDeletes;
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'extraTableId', 'propertyId','created_at','updated_at','deleted_at'];

    protected $table = 'extra_tables_prop_link_data';
}
