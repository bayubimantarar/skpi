<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Buku extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'buku';
    protected $fillable = [
        'judul',
        'harga'
    ];

    public function getHargaRupiahAttribute($value)
    {
        return "Rp " . number_format($this->harga, 2, ',', '.');
    }
}
