<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['buyer_id', 'seller_id', 'item_name', 'amount', 'status', 'fee', 'notes'];

    public function buyer() {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function seller() {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }

    public function disbursement() {
        return $this->hasOne(Disbursement::class);
    }

    public function logs() {
        return $this->hasMany(Log::class);
    }
}
