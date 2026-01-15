@extends('admin.layouts.app')

@section('title', 'Quản lý người dùng')

@section('content')
<h3 class="mb-4">Quản lý người dùng</h3>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-end gap-3">
        <form method="GET" action="{{ route('admin.user.index') }}" class="d-flex gap-2 flex-grow-1">
            <div>
                <label class="form-label">Tìm kiếm bài viết</label>
                <input
                    type="text"
                    name="query"
                    class="form-control"
                    placeholder="Nhập tiêu đề..."
                    value="{{ request('query') }}">
            </div>
        </form>

        <a href="{{ route('admin.user.create') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i> Tạo mới
        </a>
    </div>

    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>Tên người dùng</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th width="120">Hành động</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($users as $index => $user)
                <tr>
                    <td>{{ $users->firstItem() + $index }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('admin.user.edit', $user->id) }}">
                                    <i class="bx bx-edit-alt me-1"></i> Sửa
                                </a>
                                <form action="{{ route('admin.user.destroy', $user->id) }}" method="post"
                                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bx bx-trash me-1"></i> Xóa
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center text-muted py-4">
                        Không có dữ liệu
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- PAGINATION --}}
    @if ($users->hasPages())
    <div class="card-footer d-flex justify-content-between align-items-center">
        <div class="text-muted">
            Hiển thị {{ $users->count() }} / {{ $users->total() }} người dùng
        </div>

        {{ $users->links('pagination::bootstrap-5') }}
    </div>
    @endif
</div>
@endsection