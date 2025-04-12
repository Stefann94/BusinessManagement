<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Business;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
{
    $user = Auth::user();

    // obține doar businessurile userului logat
    $businesses = Business::where('user_id', $user->id)->get();

    return view('businesses.index', compact('businesses'));
}
}
