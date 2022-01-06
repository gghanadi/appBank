<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class nasabah extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'pin',
        'norekening',
        'namaibukandung',
        'loan',
        'provinsi',
        'kota',
        'alamat',
        'phone'
    ];

    protected $hidden = [
        'pin',
        'namaibukandung',
    ];
}
