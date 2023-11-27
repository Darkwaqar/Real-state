<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveSearches extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'save_searches';

    protected $fillable = [
        'user_id',
        'search_criteria',
        'created_at',
        'updated_at'
    ];

    public function userSavedsearches(){
        return $this->belongsTo(User::class, 'user_id', 'id');
        
    }
}
