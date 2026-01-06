<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('query');
        $categoryId = $request->query('category_id');
    
        $categories = Category::all();
    
        $posts = Post::withFullRelations()
            ->when($search, function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%");
            })
            ->when($categoryId, function ($q) use ($categoryId) {
                $q->where('category_id', $categoryId);
            })
            ->when($request->status, fn ($q) =>
                $q->where('status', $request->status)
            )
            ->latest()
            ->paginate(15)
            ->withQueryString();
    
        return view('admin.post.index', compact(
            'posts',
            'categories',
            'search',
            'categoryId'
        ));
    }
    

    public function create()
    {
        $category = Category::all();
        return view('admin.post.create', compact('category'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'=> 'required|string',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable',
            'content' => 'required|string',
            'status' => ['required', Rule::in(Post::STATUS)],
            'tags' => 'nullable'
        ]);

        $slug = Str::slug($validated['title']);
        $count = Post::where('slug', 'LIKE', "{$slug}%")->count();

        $validated['slug'] = $count ? "{$slug}-{$count}" : $slug;
        $validated['created_by'] = auth()->user()->id;

        if (isset($validated['tags'])) {
            $validated['tags'] = json_decode($validated['tags'], true) ?? [];
        }
    
        Post::create($validated);
    
        return redirect()->back()
            ->with('success', 'Thêm bài viết thành công');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $category = Category::all();

        return view('admin.post.edit', compact('post', 'category'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
    
        $validated = $request->validate([
            'title'=> 'required|string',
            'description' => 'nullable',
            'content' => 'required|string',
            'status' => ['required', Rule::in(Post::STATUS)],
            'tags' => 'nullable'
        ]);

        if ($post->title !== $validated['title']) {
            $slug = Str::slug($validated['title']);
            $count = Post::where('slug', 'LIKE', "{$slug}%")
                ->where('id', '!=', $id)
                ->count();
            $validated['slug'] = $count ? "{$slug}-{$count}" : $slug;
        }

        if (isset($validated['tags'])) {
            $validated['tags'] = json_decode($validated['tags'], true) ?? [];
        }
        
        $post->update($validated);
    
        return $request->expectsJson()
            ? response()->json(['success' => true])
            : redirect()->back()->with('success', 'Cập nhật bài viết thành công');
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()
                ->route('admin.post.index')
                ->with('error', 'Bài viết không tồn tại');
        }

        $post->delete();

        return redirect()
            ->route('admin.post.index')
            ->with('success', 'Xóa bài viết thành công');
    }
}
