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
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:categories,name',
        ]);

        $slug = Str::slug($validatedData['name']);

        $category = Category::create([
            'name' => $validatedData['name'],
            'slug' => $slug,
        ]);

        if($category)
            return redirect()->route('admin.category.index')->with('success', 'Thêm thể loại thành công!');
        else
            return back()->with('error', 'Thêm thể loại thất bại.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edittheloai', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:categories,name,' . $id,
        ]);
        
        $slug = Str::slug($validatedData['name']);

        $category->update([
            'name' => $validatedData['name'],
            'slug' => $slug,
        ]);

        if($category)
            return redirect()->route('admin.category.index')->with('success', 'Cập nhật thể loại thành công!');
        else
            return back()->with('error', 'Cập nhật thể loại thất bại.');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if($category->delete())
            return redirect()->route('admin.category.index')->with('success', 'Xóa thể loại thành công!');
        else
            return back()->with('error', 'Xóa thể loại thất bại.');
    }
}