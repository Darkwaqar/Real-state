<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletCredit extends Model
{
    use HasFactory;
    protected $table = 'wallet_credit';
    protected $fillable = [
        'agent_id',
        'transaction_type',
        'amount',
        'lead_id',
        'card_number',
        'name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'agent_id', 'id');
    }
}
