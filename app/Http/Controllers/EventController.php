<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event()
    {
        return view('event.informasi-event');
    }

    public function bookingEvent()
    {
        return view('event.booking-tiket');
    }

    public function mengelolaEvent()
    {
        return view('event.mengelola-informasi-event');
    }
}
