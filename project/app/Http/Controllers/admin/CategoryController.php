<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index() 
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.category.theloai', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.addtheloai');
    }

    public function store(Request $request)
    {
        $slug = Str::slug($request['name']);

        $category = Category::create([
            'name' => $request['name'],
            'image' => $request['image'],
            'slug' => $slug,
            'status' => $request['status'],
        ]);

        if($category)
            return redirect()->route('admin.category.index')->with('success', 'Thêm thể loại thành công!');
        else
            return back()->with('error', 'Thêm thể loại thất bại.');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edittheloai', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        
        $slug = Str::slug($request['name']);

        $category->update([
            'name' => $request['name'],
            'image' => $request['image'],
            'slug' => $slug,
            'status' => $request['status'],
        ]);

        if($category)
            return redirect()->route('admin.category.index')->with('success', 'Cập nhật thể loại thành công!');
        else
            return back()->with('error', 'Cập nhật thể loại thất bại.');
    }
    public function destroy($id)
    {
        $category = Category::find($id);

        if($category->delete())
            return redirect()->route('admin.category.index')->with('success', 'Xóa thể loại thành công!');
        else
            return back()->with('error', 'Xóa thể loại thất bại.');
    }
}