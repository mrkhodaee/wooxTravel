<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function users(){
        if (Auth::user() === null) {
           return redirect('/login');
        }
        $bookings = Reservation::where('user_id' , Auth::user()->id)->get();
        return view('my-bookings', compact('bookings'));
    }
}
