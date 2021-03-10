<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function about()
    {
        $nama = 'Ivan Alissetiyan';
        return view('about', compact('nama'));
    }
    
    public function contact()
    {
        return view('contact');
    }
}
