<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function home()
    {
        return view('welcome')->withTasks([
            'Go to the school',
            'Go to the market',
            'Go to work'
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
