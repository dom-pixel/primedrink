<?php

namespace App\Http\Controllers\Web;

use App\Bank;
use App\Http\Controllers\Controller;
use App\Http\Requests\SendMailableRequest;
use App\Mail\SendMailable;
use App\Restaurant;
use App\Subscription;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function mail(SendMailableRequest $request)
    {
        $request->session()->put('full_name', $request->name);
        $request->session()->put('email', $request->email);
        $request->session()->put('cell', $request->cell);
        return redirect()->route('showForm');
    }

    public function form()
    {
        $banks = Bank::all();
        return view('form', compact('banks'));
    }

    public function register(Request $request)
    {
        $restaurant = Restaurant::create($request->except('email', 'password'));

        $user = new User();
        $user->name = $request->full_name;
        $user->email = $request->email;
        $user->cell = $request->cell;
        $user->password = bcrypt($request->password);
        $user->restaurant_id = $restaurant->id;
        $user->client = 1;
        $user->admin = 0;
        $user->save();

        $data = [
            'toName' => $request->full_name,
            'toEmail' => $request->email
        ];

        try {
            Mail::to($request->email)->send(new SendMailable($data));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocorreu um erro com sua soliticação, tente novamente mais tarde!');
        }

        // return redirect()->route('landingPage')->with('success', 'Seu cadastro foi concluido com sucesso!');
        return view('form-end');
    }

    public function socio()
    {
        return view('socio');
    }

    public function socioRegister(Request $request)
    {

    }
}
