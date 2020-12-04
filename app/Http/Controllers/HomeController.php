<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;

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

<<<<<<< HEAD
    public function dashboard(){
        $materi = Materi::count();
        return view('dashboard.dashboard', compact('materi'));
    }

    public function materi_twk(){
        $materi_twk = Materi::where('kategori', 'TWK')->get();
        return view('dashboard.materi_twk', compact('materi_twk'));
    }
    public function materi_tiu(){
        $materi_tiu = Materi::where('kategori', 'TIU')->get();
        return view('dashboard.materi_tiu', compact('materi_tiu'));
    }
    public function materi_tkp(){
        $materi_tkp = Materi::where('kategori', 'TKP')->get();
        return view('dashboard.materi_tkp', compact('materi_tkp'));
    }
=======
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

>>>>>>> 0446c47727e847b85f62c975e6b0e560890c8751
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
