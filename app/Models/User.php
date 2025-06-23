<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relasi ke transaksi sebagai pembeli
    public function boughtTransactions(): HasMany
    {
        return $this->hasMany(Transaction::class, 'buyer_id');
    }

    // Relasi ke transaksi sebagai penjual
    public function soldTransactions(): HasMany
    {
        return $this->hasMany(Transaction::class, 'seller_id');
    }

    // Relasi ke log perubahan status
    public function logs(): HasMany
    {
        return $this->hasMany(Log::class, 'changed_by');
    }

    // Relasi ke notifikasi
    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }
}
