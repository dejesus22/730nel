<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function portafolio()
    {
        return view('vistas.portafolio');
    }

    public function cv()
    {
        return view('vistas.cv');
    }


    public function contacto()
    {
        return view('vistas.contact');
    }
}
