<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;
use \App\Models\Phim;
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
        $categories = Category::where('status', 1)->get(); 
        $phims = Phim::where('status', 1)->get();
        return view('home', compact('categories', 'phims'));
    }
    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
        }
        return redirect('/');
    }
}
