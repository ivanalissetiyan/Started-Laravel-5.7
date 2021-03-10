<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
     public function index()
     {
        $tasks = ['Kerja', 'Kuliah', 'Freelance', 'Bisnis', 'Mengajar'];
        return view('welcome', compact('tasks')); 
     }
}
