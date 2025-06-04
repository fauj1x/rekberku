<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['transaction_id', 'method', 'flip_reference_id', 'amount', 'is_paid', 'paid_at', 'expired_at'];

    public function transaction() {
        return $this->belongsTo(Transaction::class);
    }
}

