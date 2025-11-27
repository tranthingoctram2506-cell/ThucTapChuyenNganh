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
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:phims,name',
        ]);

        $phim = Phim::create($validatedData); 
        
        if($phim)
            return redirect()->route('admin.product.index')->with('success', 'Thêm phim thành công!');
        else 
            return back()->with('error', 'Thêm phim thất bại.');
    }

    public function edit($id){
        $phim = Phim::findOrFail($id); 
        return view('admin.product.editphim', compact('phim'));
    }

    public function update(Request $request, $id){
        $phim = Phim::findOrFail($id);
        
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:phims,name,' . $id,
        ]);

        $phim->update($validatedData); 
        
        if($phim)
            return redirect()->route('admin.product.index')->with('success', 'Cập nhật phim thành công!');
        else
            return back()->with('error', 'Cập nhật phim thất bại.');
    }

    public function destroy($id){
        $phim = Phim::findOrFail($id); 
        if($phim->delete())
            return redirect()->route('admin.product.index')->with('success', 'Xóa phim thành công!');
        else
            return back()->with('error', 'Xóa phim thất bại.');
    }
}