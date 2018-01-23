<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @Get("/articles")
     */
    public function articles() {
        return view('articles');
    }
    /**
     * @Get("/article/{id}")
     */
    public function article( $id = null) {
        return view('article', [
            'id' => $id
        ]);
    }
}
