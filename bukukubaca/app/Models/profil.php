<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    protected $table = 'profil';
    protected $fillable = [
        'umur',
        'alamat',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
