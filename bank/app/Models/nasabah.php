<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Uuid;

class nasabah extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'pin',
        'namaibukandung',
        'loan',
        'provinsi',
        'kota',
        'alamat',
        'phone',
    ];

    protected $hidden = [
        'pin',
        'namaibukandung',
    ];

    protected $guarded = [
        'id'
    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->norekening = mt_rand(1000,9999);
        });
    }
}
