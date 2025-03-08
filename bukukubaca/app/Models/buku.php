<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = ['judul', 'sumary', 'gambar', 'stok', 'genres_id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genres_id');
    }

    public function komen()
    {
        return $this->hasMany(Komen::class, 'bukus_id');
    }
}
?>