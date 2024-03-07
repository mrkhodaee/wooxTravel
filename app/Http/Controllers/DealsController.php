<?php

namespace App\Http\Controllers;

use App\Models\city;
use Illuminate\Http\Request;

class DealsController extends Controller
{
    public function deals(){
        $cities = city::select()->orderBy('id' , 'desc')->get();
        return view('deals', compact('cities'));
    }
}
