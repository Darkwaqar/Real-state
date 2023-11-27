<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $table = 'complaints';
    protected $primaryKey = 'id';
    protected $fillable = [
        'subject',
        'type',
        'description',
        'user_id',
        'attachment',
        'attachment2',
        'attachment3',
        'attachment4',
        'ticket_no',
        'status',
        'created_at',
        'updated_at'
    ];
    public function userComplaints()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function complaintStatus()
    {
        return $this->hasMany(ComplaintStatus::class, 'complaints_id', 'id');
    }
}
