<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disbursement extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'payment_method',       // bank_transfer, ovo, gopay, dana, dll
        'to_account',           // nomor rekening bank atau nomor e-wallet (misal nomor HP)
        'to_account_name',
        'amount',
        'status',               // pending, sent, failed
        'flip_disbursement_id',
        'metadata',             // json untuk data tambahan payment gateway
        'sent_at',
    ];

    protected $casts = [
        'metadata' => 'array',  // otomatis cast ke array saat diakses
        'sent_at' => 'datetime',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
