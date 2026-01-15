<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('query');
    
        $courses = Course::when($search, function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%");
            })
            ->orderBy("sort_order","asc")
            ->paginate(15)
            ->withQueryString();
    
        return view('admin.course.index', compact(
            'courses',
            'search',
        ));
    }

    public function create()
    {
        return view('admin.course.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'is_active'   => 'nullable|boolean',
            'sort_order'  => 'nullable|integer|min:1',
        ]);

    
        $validated['is_active'] = $request->boolean('is_active');
    
        Course::create($validated);
    
        return redirect()->back()
            ->with('success', 'Thêm khoá học thành công');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('admin.course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
    
        $validated = $request->validate([
            'name'        => 'sometimes|required|string|max:255',
            'is_active'   => 'nullable|boolean',
            'sort_order'  => 'nullable|integer|min:1',
        ]);
    
        $validated['is_active'] = $request->boolean('is_active');
    
        $course->update($validated);
    
        return $request->expectsJson()
            ? response()->json(['success' => true])
            : redirect()->back()->with('success', 'Cập nhật khoá học thành công');
    }  

    public function destroy($id)
    {
        $course = Course::find($id);

        if (!$course) {
            return redirect()
                ->route('admin.course.index')
                ->with('error', 'Khoá học không tồn tại');
        }

        $course->delete();

        return redirect()
            ->route('admin.course.index')
            ->with('success', 'Xóa khoá học thành công');
    }
}
