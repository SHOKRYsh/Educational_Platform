<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    //
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }
}
