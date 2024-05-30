<?php

namespace App\Http\Controllers;

use App\Models\Costume;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingPage($id)
    {
        $costume = Costume::findOrFail($id);
        return view('kostum.kostum-booking', compact('costume'));
    }
}
