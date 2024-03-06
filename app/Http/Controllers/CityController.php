<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function about($id){
        $cities = city::select()->orderBy('id', 'desc')->take(5)->where('country_id' , $id)->get();
        $country = country::find($id);
        return view('about' , compact('cities', 'country'));
    }
}
