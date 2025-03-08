<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class komen extends Model
{
    protected $table = 'komen';
    protected $fillable = [
        'users_id',
        'bukus_id',
        'content',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
