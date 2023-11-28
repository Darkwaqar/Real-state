<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategories extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'bc_id';
    protected $table = 'blog_categories';
    protected $fillable = [
        'bc_id',
        'bc_name',
        'bc_slug',
        'bc_dp',
        'bc_status',
        'admin_id',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->fromDateTime($value),
            set: fn ($value) => $this->fromDateTime($value),
        );
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->fromDateTime($value),
            set: fn ($value) => $this->fromDateTime($value),
        );
    }


    protected function deletedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->fromDateTime($value),
            set: fn ($value) => $this->fromDateTime($value),
        );
    }
    protected function bcName(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => ucwords($value),
        );
    }

    public function admin(){
        return $this->hasMany(User::class,'id','admin_id');
    }
    public function blogs(){
        //return
        return $this->hasMany(Blogs::class,'category_id','bc_id');

    }
}
