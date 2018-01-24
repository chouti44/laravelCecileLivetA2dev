<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @Get("/articles")
     */
    public function articles() {
        $articles = Articles::all();

        return view('articles', [
            'articles' => $articles
        ]);
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
