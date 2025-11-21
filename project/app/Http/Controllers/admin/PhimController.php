<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phim;

class PhimController extends Controller
{
    public function index()
    {
        $phims = Phim::orderBy('id', 'desc')->get(); 
        return view('admin.danhsachphim', compact('phims'));
    }
}