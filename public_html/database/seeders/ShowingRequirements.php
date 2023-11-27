<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowingRequirements extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'mlsshowing_requirements';
    protected $fillable = ['id','ShowingName','Status','created_at','updated_at'];
}
