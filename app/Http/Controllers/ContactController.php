<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Mail;

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
            'message' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->action('ContactController@contact')->with('message', 'Tous les champs sont obligatoires');
        }

        Mail::create([
            Mail::EMAIL => $values[Mail::EMAIL],
            Mail::SUBJECT => $values[Mail::SUBJECT],
            Mail::CONTENT => $values[Mail::CONTENT],
        ]);

        return redirect()->action('ContactController@contact')->with('message', 'Your mail is send.');
    }
}
