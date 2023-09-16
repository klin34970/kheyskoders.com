<?php

namespace App\Http\Controllers;

use App\LastMediaInstagram;
use Auth, Cdn;

class HomeController extends Controller
{
    /**
     *
     */
    public function index(){

        $LastMediaInstagram = new LastMediaInstagram();
        $LastMediaInstagram = $LastMediaInstagram->latest()->first();

        return view('welcome')->with([
            'instagram' => $LastMediaInstagram
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function socialsNetworks(){
        return view('socialsnetworks');
    }
    public function musicNetworks(){
        return view('musicnetworks');
    }
}
