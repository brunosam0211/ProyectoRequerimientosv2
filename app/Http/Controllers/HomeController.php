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
    public function home2()
    {
        return view('layouts.banner');
    }
    public function iniciar()
    {
        return view('auth.login');
    }

    public function home3(){
        return view ('layouts.bienvenido');
    }
}
