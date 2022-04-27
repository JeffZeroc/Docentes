<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Http\Kernel;
use \App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    //public function __construct()
    //{
        //$this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        // $user = User::find();
        // $tipo = auth()->user()->tipo;
        // $p= session()->get('name');
        // $nombre = User::get('name');
        // if ( $tipo == 1 ) {
        //     return view('encargado.home');
        // }else {
        //     return view('admin.home');
        // }
        return redirect('/home/inicio');
    }

    public function registro(){

        return view('auth.register');
    }
    
    
    
}
