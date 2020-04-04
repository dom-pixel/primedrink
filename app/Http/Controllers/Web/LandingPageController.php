<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendMailableRequest;
use App\Mail\SendMailable;
use App\Subscription;
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
        $subscription = new Subscription();
        $subscription->name = $request->name;
        $subscription->email = $request->email;
        $subscription->cell = $request->cell;

        $data = [
            'toName' => $subscription->name,
            'toEmail' => $subscription->email
        ];

        try {
            Mail::to($subscription->email)->send(new SendMailable($data));
            $subscription->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocorreu um erro com sua soliticação, tente novamente mais tarde!');
        }

        return redirect()->back()->with('success', 'Inscrição feita com sucesso!');
    }
}
