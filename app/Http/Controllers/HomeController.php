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

    public function dashboard(){
        return view('dashboard.dashboard');
    }

    public function tryout()
    {
        return view('dashboard.tryout');
    }

    public function tryout_detail()
    {
        return view('dashboard.tryout_detail');
    }

    public function hasillatihan()
    {
        return view('dashboard.hasillatihan');
    }

    public function latihansoal()
    {
        return view('dashboard.latihansoal');
    }
}
