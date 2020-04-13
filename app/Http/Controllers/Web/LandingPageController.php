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
        /*        $subscription = new Subscription();
                $subscription->name = $request->name;
                $subscription->email = $request->email;
                $subscription->cell = $request->cell;

                $data = [
                    'toName' => $subscription->name,
                    'toEmail' => $subscription->email
                ];*/

        /*    $data = [
                'full_name' => $request->name,
                'email' => $request->email
            ];*/

        $request->session()->put('full_name', $request->name);
        $request->session()->put('email', $request->email);

        /* try {
              Mail::to($subscription->email)->send(new SendMailable($data));
              $subscription->save();
          } catch (\Exception $e) {
              return redirect()->back()->with('error', 'Ocorreu um erro com sua soliticação, tente novamente mais tarde!');
          }*/

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
        $user->password = bcrypt($request->password);
        $user->restaurant_id = $restaurant->id;
        $user->client = 1;
        $user->admin = 0;
        $user->save();

        $data = [
            'full_name' => $request->full_name,
            'email' => $request->email
        ];

        try {
            Mail::to($request->email)->send(new SendMailable($data));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocorreu um erro com sua soliticação, tente novamente mais tarde!');
        }

        return redirect()->route('landingPage')->with('success', 'Seu cadastro foi concluido com sucesso!');
    }
}
