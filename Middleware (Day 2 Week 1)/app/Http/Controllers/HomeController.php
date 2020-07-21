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
        return view('user')->with('success', 'Anda Memiliki Akses');
    }

    public function admin()
    {
        return view('admin')->with('success', 'Anda Memiliki Akses');
    }

    public function superAdmin()
    {
        return view('superadmin')->with('success', 'Anda Memiliki Akses');
    }
}
