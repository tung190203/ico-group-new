<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('query');
    
        $menus = Menu::when($search, function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%");
            })
            ->orderBy("sort_order","asc")
            ->paginate(15)
            ->withQueryString();
    
        return view('admin.menu.index', compact(
            'menus',
            'search',
        ));
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);

        return view('admin.menu.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
    
        $validated = $request->validate([
            'name'        => 'sometimes|required|string|max:255',
            'is_active'   => 'nullable|boolean',
            'sort_order'  => 'nullable|integer|min:1',
        ]);
    
        $validated['is_active'] = $request->boolean('is_active');
    
        $menu->update($validated);
    
        return $request->expectsJson()
            ? response()->json(['success' => true])
            : redirect()->back()->with('success', 'Cập nhật menu thành công');
    }  
}
