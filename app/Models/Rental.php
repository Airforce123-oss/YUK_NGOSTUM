<?php

namespace App\Models;

use App\Models\User;
use App\Models\Costume;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'costume_id',
        'user_id',
        'start_date',
        'end_date',
        'subtotal',
        'alamat_pengiriman',
        'metode_pembayaran',
        'metode_pengambilan',
    ];

    protected $table = 'rentals';

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function costume(){
        return $this->belongsTo(Costume::class);
    }
}
