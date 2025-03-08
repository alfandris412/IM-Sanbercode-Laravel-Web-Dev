<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    protected $table = 'genre';
    protected $fillable = ['nama','deskripsi'];

    public function buku()
    {
        return $this->hasMany(buku::class, 'genres_id');
    }
}