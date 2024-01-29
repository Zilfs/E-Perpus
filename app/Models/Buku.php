<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
    ];

    protected $hidden = [];

    public function kategori_buku_relasi()
    {
        return $this->hasMany(KategoriBukuRelasi::class, 'buku_id', 'id');
    }

    public function koleksi_pribadi()
    {
        return $this->hasMany(KoleksiPribadi::class, 'buku_id', 'id');
    }
}
