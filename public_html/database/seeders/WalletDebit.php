<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletDebit extends Model
{
    use HasFactory;
    protected $table = 'wallet_debit';
    protected $fillable = [
        'agent_id',
        'transaction_id',
        'transaction_type',
        'amount',
        'lead_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'agent_id', 'id');
    }

    public function lead()
    {
        return $this->belongsTo(PropertyLeads::class, 'lead_id', 'id');
    }
}
