@extends('admin.layouts.app')

@section('title', 'Quản lý menu')
@section('content')
    <h3 class="mb-4">Quản lý menu</h3>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-end">
            <form method="GET" action="{{ route('admin.menu.index') }}">
                <label class="form-label">Tìm kiếm menu</label>
                <input type="text" name="query" class="form-control" placeholder="Tìm kiếm" value="{{ request('query') }}">
            </form>
        </div>

        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="50">#</th>
                        <th>Tên menu</th>
                        <th>Link truy cập</th>
                        <th>Hiển thị</th>
                        <th>Thứ tự hiển thị</th>
                        <th width="120">Hành động</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($menus as $index => $menu)
                        <tr>
                            <td>{{ $menus->firstItem() + $index }}</td>
                            <td>{{ $menu->name }}</td>
                            <td>
                                <a href="{{ Str::startsWith($menu->link, 'http')
                                            ? $menu->link
                                            : url($menu->link) }}">
                                    {{ $menu->link }}
                                </a>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input
                                        class="form-check-input toggle-active"
                                        type="checkbox"
                                        data-id="{{ $menu->id }}"
                                        {{ $menu->is_active ? 'checked' : '' }}
                                    >
                                </div>                                                              
                            </td>                            
                            <td>{{ $menu->sort_order }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="{{ route('admin.menu.edit', $menu->id) }}">
                                            <i class="bx bx-edit-alt me-1"></i> Sửa
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-4">
                                Không có dữ liệu
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- PAGINATION --}}
        @if ($menus->hasPages())
            <div class="card-footer d-flex justify-content-between align-items-center">
                <div class="text-muted">
                    Hiển thị {{ $menus->count() }} / {{ $menus->total() }} danh mục
                </div>

                {{ $menus->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
@endsection
@push('js')
<script>
document.querySelectorAll('.toggle-active').forEach(el => {
    el.addEventListener('change', function () {
        const menuId = this.dataset.id;

        fetch(`/admin/menu/${menuId}`, {
            method: 'PUT',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: JSON.stringify({
                is_active: this.checked ? 1 : 0
            })
        })
        .then(res => res.json())
        .then(data => {
            if (!data.success) {
                this.checked = !this.checked;
                alert('Có lỗi xảy ra');
            } else {
                alert
            }
        })
        .catch(() => {
            this.checked = !this.checked;
            alert('Không thể cập nhật');
        });
    });
});
</script>
@endpush
