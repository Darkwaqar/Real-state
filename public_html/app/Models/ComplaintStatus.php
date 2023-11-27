<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintStatus extends Model
{
    use HasFactory;
    protected $table = 'complaint_statuses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'complaints_id',
        'status_changed_by',
        'status',
        'status_changed_description',
        'created_at',
        'updated_at'
    ];

    public function ticketUpdatedBy()
    {
        return $this->belongsTo(User::class, 'status_changed_by', 'id');
    }
    public function complaint()
    {
        return $this->belongsTo(Complaint::class, 'complaints_id', 'id');
    }
}
