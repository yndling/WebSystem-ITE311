<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home - Learning Hub',
            'content' => view('index')
        ];
        return view('template', $data);
    }

    public function about(): string
    {
        $data = [
            'title' => 'About Us - Learning Hub',
            'content' => view('about')
        ];
        return view('template', $data);
    }

    public function contact(): string
    {
        $data = [
            'title' => 'Contact Us - Learning Hub',
            'content' => view('contact')
        ];
        return view('template', $data);
    }
}
