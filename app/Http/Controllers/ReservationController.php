<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function makeReservation($id){
        $city =city::find($id);
        return view('reservation', compact('city'));
    }
    public function storeReservation(Request $request, $id){
        $city =city::find($id);
        
        if ($request->check_in_date > date('Y-m-d')) {
            $reservation = Reservation::create([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'num_guest' => $request->num_guest,
                'check_in_date' => $request->check_in_date,
                'destination' => $request->destination,
                'price' => $city->price * $request->num_guest,
                'user_id' => Auth::user()->id,
            ]);
        
            // if ($reservation) {
            // }
            echo 'رزرو شد.';
        } else {
            echo 'تاریخ باید از امروز بزرگ باشد.';
        }
    }
}
