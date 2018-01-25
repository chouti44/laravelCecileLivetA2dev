<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use App\Models\Mails;
use App\Notifications\form;

/**
 * @Middleware("web")
 */

class ContactController extends Controller
{
    /**
     * @Get("/contact")
     */
    public function contact() {
        return view('contact', [
            'message' => session('message')
        ]);
    }

    /**
     * @Post("/contact")
     */
    public function postContact(Request $request) {
        $values = $request->all();

        $validator = Validator::make($values, [
            'email' => 'required',
            'subject' => 'required',
            'content' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->action('ContactController@contact')->with('message', 'Tous les champs sont obligatoires');
        }

        $mail = Mails::create([
            Mails::EMAIL => $values[Mails::EMAIL],
            Mails::SUBJECT => $values[Mails::SUBJECT],
            Mails::CONTENT => $values[Mails::CONTENT]
        ]);

        Notification::send($mail, new form($mail));



        return redirect()->action('ContactController@contact')->with('message', 'Your mail is send.');
    }
}
