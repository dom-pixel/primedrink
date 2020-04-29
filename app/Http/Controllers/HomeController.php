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
        $subscriptions = Subscription::all();
        return view('home', compact('users', 'subscriptions'));
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurant', compact('restaurant'));
    }

    public function showPartner($id)
    {
        $subscription = Subscription::find($id);
        return view('partner', compact('subscription'));
    }
}
