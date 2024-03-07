<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\country;
use Illuminate\Http\Request;

class DealsController extends Controller
{
    public function deals(){
        $cities = city::select()->orderBy('id' , 'desc')->get();
        $countries = country::all();
        return view('deals', compact('cities', 'countries'));
    }
    public function searchDeals(Request $request){
        $country_id = $request->get('country_id');
        $price = $request->get('price');

        $searches = city::where('country_id', $country_id)->where('price', '<=' , $price)->orderBy('id' , 'desc')->take(4)->get();
        $cities = city::select()->orderBy('id' , 'desc')->get();
        $countries = country::all();
        return view('search-deals', compact('cities' , 'searches' , 'countries'));
    }
    
}
