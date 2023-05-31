<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }

    public function conversations()
    {
        return $this->hasMany(SupportTicketConvo::class);
    }
}
