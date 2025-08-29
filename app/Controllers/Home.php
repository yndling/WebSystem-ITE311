<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function template(): string
    {
        return view('template');
    }

    public function index(): string
    {
        return view('index');
    }

    public function about(): string
    {
        return view('about');
    }

    public function contact(): string
    {
        return view('contact');
    }
}
