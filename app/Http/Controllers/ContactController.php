<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @Get("/contact")
     */
    public function contact() {
        return view('contact');
    }
}
