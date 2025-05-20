<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function links()
    {
        $title = "Links pagina";
        $links = [
           'https://www.google.com',
           'https://www.facebook.com',
           'https://www.twitter.com',
           'https://www.linkedin.com',
           'https://www.instagram.com',
        ];
        return view('links', compact('title', 'links'));
    }

    public function contact()
    {

        $email = "admin@admin.com";

        return view('contact', compact('email'));
        // return view('contact', ['email'=> $email]);
    }

    public function companies()
    {
        return view('companies');
    }

    public function about()
    {

        $title = "Nova College BPV Finder";

        return view('about', ['title'=> $title]);
    }
}
