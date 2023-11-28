<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'newsletters';
    protected $fillable = [
        'id',
        'user_id','newsletter_name','newsletter_send_date','email','created_at',
        'updated_at',
];

}
