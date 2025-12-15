<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;
use \App\Models\Phim;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $categories = Category::where('status', 1)->get();
        view()->share('categories', $categories);
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
        return view('home.index',compact("categories","phims"));
    }
    
    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
        }
        return redirect('/');
    }
    public function category_product($id){
        $phims = Phim::where(
            [
                ['category_id','=',$id],['status','=','1']
            ])->get();
        return view('home.category_product',compact("phims","phims"));
    }
    public function single_product($id){
        $phim = Phim::where(
            [
                ['id','=',$id],['status','=','1']
            ])->get();
        return view('home.single_product',compact("phim","phim"));
    }
}
