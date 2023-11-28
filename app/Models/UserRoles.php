<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRoles extends Model
{
    use HasFactory;
    //use SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'user_roles';
    protected $fillable = [
        'id',
        'name',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    public function Roles(){

        return $this->hasMany(User::class, 'role_id',); //user can have multiple roles
    }
}
