<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blogs extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'b_id';
    protected $table = 'blogs';
    protected $fillable = [
        'b_id',
        'blog_title',
        'b_slug',
        'b_type',
        'b_body',
        'blog_cover',
        'category_id',
        'admin_id',
        'b_status',
        'meta_title',
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
    public function admin(){
        return $this->hasMany(User::class,'id','admin_id');
    }
    public function category(){
        return $this->hasMany(BlogCategories::class,'bc_id','category_id');
    }
}
