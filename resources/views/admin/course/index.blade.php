@extends('admin.layouts.app')

@section('title', 'Quản lý khoá học')

@section('content')
<h3 class="mb-4">Quản lý khoá học</h3>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-end">
            <form method="GET" action="{{ route('admin.course.index') }}">
                <label class="form-label">Tìm kiếm khoá học</label>
                <input
                    type="text"
                    name="query"
                    class="form-control"
                    placeholder="Tìm kiếm"
                    value="{{ request('query') }}"
                >
            </form>            
        <a href="{{ route('admin.course.create') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i> Tạo mới
        </a>
    </div>

    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>Tên khoá học</th>
                    <th>Hiển thị</th>
                    <th>Thứ tự hiển thị</th>
                    <th width="120">Hành động</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($courses as $index => $course)
                    <tr>
                        <td>{{ $courses->firstItem() + $index }}</td>
                        <td>{{ $course->name }}</td>
                        <td>
                                <div class="form-check form-switch">
                                    <input
                                        class="form-check-input toggle-active"
                                        type="checkbox"
                                        data-id="{{ $course->id }}"
                                        {{ $course->is_active ? 'checked' : '' }}
                                    >
                                </div>                                                              
                            </td>                            
                            <td>{{ $course->sort_order }}</td>                    
                        <td>
                            <div class="dropdown">
                                <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('admin.course.edit', $course->id) }}">
                                        <i class="bx bx-edit-alt me-1"></i> Sửa
                                    </a>                                    
                                    <form action="{{ route('admin.course.destroy', $course->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa khoá học này?')">
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
                        <td colspan="5" class="text-center text-muted py-4">
                            Không có dữ liệu
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- PAGINATION --}}
    @if ($courses->hasPages())
        <div class="card-footer d-flex justify-content-between align-items-center">
            <div class="text-muted">
                Hiển thị {{ $courses->count() }} / {{ $courses->total() }} khoá học
            </div>

            {{ $courses->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection

@push('js')
<script>
document.querySelectorAll('.toggle-active').forEach(el => {
    el.addEventListener('change', function () {
        const courseId = this.dataset.id;

        fetch(`/admin/course/${courseId}`, {
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
