<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nama_toko', 'alamat_toko'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function costumes()
    {
        return $this->hasMany(Costume::class);
    }
}
