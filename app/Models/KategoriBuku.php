<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;

    protected $table = 'kategori_buku';

    protected $fillable = [
        'nama_kategori',
    ];

    protected $hidden = [];

    public function kategori_buku_relasi()
    {
        return $this->hasMany(KategoriBukuRelasi::class, 'kategori_id', 'id');
    }
}
