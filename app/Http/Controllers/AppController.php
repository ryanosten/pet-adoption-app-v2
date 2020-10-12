<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        return view('index', ['route' => 'index']);
    }

    public function cats() {
        return view('cats', ['route' => 'cats']);
    }

    public function dogs() {
        return view('dogs', ['route' => 'dogs']);
    }
}
