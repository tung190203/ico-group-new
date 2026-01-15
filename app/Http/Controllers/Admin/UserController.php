<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('query');

        $users = User::where('id', '!=', auth()->id())
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->paginate(15)
            ->withQueryString();

        return view('admin.user.index', compact('users'));
    }
    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create($validated);

        return redirect()->back()
            ->with('success', 'Thêm người dùng thành công');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        $validated = $request->validate([
            'name' => 'required|string|max:255',
    
            'username' => [
                'required',
                'string',
                'max:255',
                Rule::unique('users', 'username')->ignore($user->id),
            ],
    
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
    
            'password' => 'nullable|string|min:6',
        ]);
    
        // Nếu có password thì mới update
        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }
    
        $user->update($validated);
    
        return $request->expectsJson()
            ? response()->json(['success' => true])
            : redirect()->back()->with('success', 'Cập nhật người dùng thành công');
    }

    public function destroy($id)
    {
        $partner = User::find($id);

        if (!$partner) {
            return redirect()
                ->route('admin.user.index')
                ->with('error', 'Người dùng không tồn tại');
        }

        $partner->delete();

        return redirect()
            ->route('admin.user.index')
            ->with('success', 'Xóa người dùng thành công');
    }
}
