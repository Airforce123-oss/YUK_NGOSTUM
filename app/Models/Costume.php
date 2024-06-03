<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costume extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'image',
        'deskripsi',
        'harga',
    ];

    protected $table = 'costumes';

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
