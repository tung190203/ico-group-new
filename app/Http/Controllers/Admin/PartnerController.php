<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('query');

        $partners = Partner::when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('address', 'like', "%{$search}%");
        })
            ->orderBy('sort_order', 'asc')
            ->paginate(15)->withQueryString();

        return view('admin.partner.index', compact('partners', 'search'));
    }

    public function create()
    {
        return view('admin.partner.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo'        => 'nullable|image|max:5012',
            'website'     => 'nullable|url',
            'email'       => 'nullable|email',
            'phone'       => 'nullable|string',
            'address'     => 'nullable|string',
            'is_active'   => 'nullable|boolean',
            'sort_order'  => 'nullable|integer|min:1',
        ]);
    
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('partners', 'public');
            $validated['logo'] = $path;
        }
    
        $validated['is_active'] = $request->boolean('is_active');
    
        Partner::create($validated);
    
        return redirect()->back()
            ->with('success', 'Thêm đối tác thành công');
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);

        return view('admin.partner.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);
    
        $validated = $request->validate([
            'name'        => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'logo'        => 'nullable|image|max:5012',
            'website'     => 'nullable|url',
            'email'       => 'nullable|email',
            'phone'       => 'nullable|string',
            'address'     => 'nullable|string',
            'is_active'   => 'nullable|boolean',
            'sort_order'  => 'nullable|integer|min:1',
        ]);

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('partners', 'public');
            $validated['logo'] = $path;
        }
    
        $validated['is_active'] = $request->boolean('is_active');
    
        $partner->update($validated);
    
        return $request->expectsJson()
            ? response()->json(['success' => true])
            : redirect()->back()->with('success', 'Cập nhật đối tác thành công');
    }    

    public function destroy($id)
    {
        $partner = Partner::find($id);

        if (!$partner) {
            return redirect()
                ->route('admin.partner.index')
                ->with('error', 'Đối tác không tồn tại');
        }

        $partner->delete();

        return redirect()
            ->route('admin.partner.index')
            ->with('success', 'Xóa đối tác thành công');
    }
}
