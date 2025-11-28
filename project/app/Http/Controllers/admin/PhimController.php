<?php
// app/Http/Controllers/admin/PhimController.php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phim;

class PhimController extends Controller
{
    public function index()
    {
        $phims = Phim::orderBy('id', 'desc')->get(); 
        return view('admin.product.danhsachphim', compact('phims'));
    }

    public function create()
    {
        return view('admin.product.addphim'); 
    }

    public function store(Request $request)
    {
        $phim = Phim::create([
            'name'=>$request->name,
        ]); 
        
        if($phim)
            return redirect()->route('admin.product.index')->with('success', 'Thêm phim thành công!');
        else 
            return back()->with('error', 'Thêm phim thất bại.');
    }

    public function edit($id){
        $phim = Phim::find($id); 
        return view('admin.product.editphim', compact('phim'));
    }

    public function update(Request $request, $id){
        $phim = Phim::find($id);

        $phim->update([
            'name'=>$request->name,
        ]); 
        
        if($phim)
            return redirect()->route('admin.product.index')->with('success', 'Cập nhật phim thành công!');
        else
            return back()->with('error', 'Cập nhật phim thất bại.');
    }

    public function destroy($id){
        $phim = Phim::find($id); 
        if($phim->delete())
            return redirect()->route('admin.product.index')->with('success', 'Xóa phim thành công!');
        else
            return back()->with('error', 'Xóa phim thất bại.');
    }
}