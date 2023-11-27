<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertySchedule extends Model
{
    use HasFactory;
    protected $table = 'property_schedule';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'agent_id',
        'agent_email_id',
        'property_id',
        'seller_id',
        'buyer_id',
        'admin_id',
        'scheduled_date'
    ];

    public function user(){

        return $this->belongsTo(User::class, 'buyer_id', 'id'); //user can have multiple roles
    }
    public function userProperty(){

        return $this->belongsTo(User::class, 'agent_id', 'id'); //user can have multiple roles
    }
    public function property(){

        return $this->belongsTo(Properties::class, 'property_id', 'id'); //user can have multiple roles
    }
    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->fromDateTime($value),
            //set: fn ($value) => $this->fromDateTime($value),
        );
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->fromDateTime($value),
            //set: fn ($value) => $this->fromDateTime($value),
        );
    }

}//calss here
