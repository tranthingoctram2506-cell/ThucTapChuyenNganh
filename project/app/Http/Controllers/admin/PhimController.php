<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phim;
use App\Models\Category;

class PhimController extends Controller
{
    public function index()
    {
        $phims = Phim::with('category')->orderBy('id', 'desc')->get();
        return view('admin.product.danhsachphim', compact('phims'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.addphim', compact('categories')); 
    }

    public function store(Request $request)
    {
        $phim = Phim::create([
            'name'=>$request->name,
            'image'=>$request->image,
            'description'=>$request->description,
            'content'=>$request->content,
            'price'=>$request->price,
            'status'=>$request->status,
            'category_id'=>$request->category_id,
        ]); 
        
        if($phim)
            return redirect()->route('admin.product.index')->with('success', 'Thêm phim thành công!');
        else 
            return back()->with('error', 'Thêm phim thất bại.');
    }

    public function edit($id){
        $phim = Phim::find($id);
        $categories = Category::all();
        return view('admin.product.editphim', compact('phim', 'categories'));
    }

    public function update(Request $request, $id){
        $phim = Phim::find($id);

        $phim->update([
            'name'=>$request->name,
            'image'=>$request->image,
            'description'=>$request->description,
            'content'=>$request->content,
            'price'=>$request->price,
            'status'=>$request->status,
            'category_id'=>$request->category_id,
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