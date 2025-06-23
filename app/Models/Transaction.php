<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
         'user_id',   
        'item_image',
        'role',
        'tujuan',
        'nominal',
        'total',
        'tanggal',
        'buyer',
        'seller',
        'nomor_rekening',
        'deskripsi',
        'biaya_admin',
        'penanggung_biaya_admin',
        'agreement',
        'bank_code',
        'bank_name',
    ];

    
}