<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('query');

        $categories = Category::with('parent')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            })
            ->orderBy('id', 'desc')
            ->paginate(15)->withQueryString();

        return view('admin.category.index', compact('categories', 'search'));
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.category.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id'   => 'nullable|exists:categories,id',
        ]);

        $category = Category::create($validated);

        return redirect()
            ->route('admin.category.create')
            ->with('success', 'Thêm danh mục thành công');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::where('id', '!=', $id)
            ->pluck('name', 'id');

        return view('admin.category.edit', compact('category', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id'   => [
                'nullable',
                'exists:categories,id',
                'not_in:' . $category->id,
            ],
        ]);

        $category->update($validated);

        return redirect()
            ->route('admin.category.index')
            ->with('success', 'Cập nhật danh mục thành công');
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()
                ->route('admin.category.index')
                ->with('error', 'Danh mục không tồn tại');
        }

        $category->delete();

        return redirect()
            ->route('admin.category.index')
            ->with('success', 'Xóa danh mục thành công');
    }
}
