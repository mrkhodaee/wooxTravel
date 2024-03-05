<?php

namespace App\Http\Controllers;

use App\Models\country;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index() {
    // جدید ترین ایجاد شده   orderBy  'desc'
    $countries = country::select()->orderBy('id' , 'asc')->get();
        return view('dashboard', compact('countries'));
    }
}
