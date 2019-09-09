<?php

namespace App\Http\Controllers;

use App\Services\Wordpress;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(Wordpress $wp)
    {
        $post = $wp->getPost(1);
        return view('pages.home', compact('post'));
    }
}
