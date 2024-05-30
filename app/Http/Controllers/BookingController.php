<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Costume;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingPage($id)
    {
        $costume = Costume::findOrFail($id);
        return view('kostum.kostum-booking', compact('costume'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'costume_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $user_id = $request->user()->id;

        $data = array_merge($request->all(),['user_id' =>$user_id]);

        $rentals = Rental::create($data);

        return redirect(route('bayar.costume', $rentals->id));
    }
}
