<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminShowBookingRequest()
    {
        $rentals = Rental::with(['user', 'costume'])->get();
        return view('admin.admin-booking-request-manager', compact('rentals'));
    }

    public function update(Request $request)
    {
        $rental = Rental::findOrFail($request->id);
        $rental->update([
            'status' => $request->status
        ]);
        return back();
    }
}
