<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function articles() {
        return view('articles');
    }

    public function article( $id = null) {
        return view('article', [
            'id' => $id
        ]);
    }
}
