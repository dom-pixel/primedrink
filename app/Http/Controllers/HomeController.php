<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\Subscription;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*  $subscriptions = Subscription::all();*/
        $users = User::where('client', '1')->get();
        return view('home', compact('users'));
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurant', compact('restaurant'));
    }
}
