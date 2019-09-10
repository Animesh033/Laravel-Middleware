<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // session
        // $request->session()->put(['animesh'=>'master student']);
        // session(['abhishek'=>'big b']); //another way to set session
        // return $request->session()->all();
        // return $request->session()->get('animesh');

        // session(['admin'=>'big b']); 
        // return $request->session()->get('admin');

        // $request->session()->forget('admin');

        // $request->session()->flush(); //to delete all sessions
        // return $request->session()->all();

        // $request->session()->flash('message', 'Post has been created');
        // return $request->session()->get('message');

        // $request->session()->reflash();
        // return $request->session()->keep('message');

        
        return view('home');
    }
}
