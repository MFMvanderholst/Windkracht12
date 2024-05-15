<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class ReservationController extends Controller
{
    // create reservation page
    public function create()
    {
        // getting the authenticated user
        $user = Auth::user();

        // returning the create reservation page
        return view('reservation.create', compact('user'));
    }

    // store reservation, saves data in the database
    public function store(Request $request)
    {
        // getting the authenticated user
        $user = Auth::user();

        // validation variable
        $validatedData = $request->validate([
            'phone_number' => 'required',
            'address' => 'required',
            'package' => 'required',
            'location' => 'required',
        ]);

        // putting data in the database
        $reservation = new Reservation([
            'user_id' => $user->id,
            'phone_number' => $validatedData['phone_number'],
            'address' => $validatedData['address'],
            'package' => $validatedData['package'],
            'location' => $validatedData['location'],
        ]);

        // saving data
        $reservation->save();

        // redirecting to the create reservation page with a success message
        return redirect('/reservation/create')->with('success', 'Reservation created successfully');
    }

    // show reservation page
    public function show()
    {
        // getting the authenticated user
        $user = Auth::user();

        // getting the user's reservations
        $reservations = Reservation::where('user_id', $user->id)->get();

        // returning the show reservation page
        return view('reservation.show', compact('user', 'reservations'));
    }
}
