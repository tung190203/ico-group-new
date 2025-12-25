@extends('admin.layouts.app')

@section('title', 'Quản lý danh mục')

@section('content')
    <h3 class="mb-4">Quản lý đối tác</h3>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-end">
            <form method="GET" action="{{ route('admin.partner.index') }}">
                <label class="form-label">Tìm kiếm đối tác</label>
                <input type="text" name="query" class="form-control" placeholder="Tìm kiếm" value="{{ request('query') }}">
            </form>
            <a href="{{ route('admin.partner.create') }}" class="btn btn-primary">
                <i class="bx bx-plus"></i> Tạo mới
            </a>
        </div>

        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="50">#</th>
                        <th>Tên đối tác</th>
                        <th>Logo</th>
                        <th>Thông tin</th>
                        <th>Hiển thị</th>
                        <th>Thứ tự hiển thị</th>
                        <th width="120">Hành động</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($partners as $index => $partner)
                        <tr>
                            <td>{{ $partners->firstItem() + $index }}</td>
                            <td>{{ $partner->name }}</td>
                            <td>
                            <img src="{{ asset('storage/' . $partner->logo) }}" alt="" class="rounded" height="80">
                            </td>
                            <td>
                                <div class="d-flex flex-column gap-1 small">

                                    {{-- Website --}}
                                    @if($partner->website)
                                        <div>
                                            <span class="fw-semibold">Trang Web:</span> {{ $partner->website }}
                                        </div>
                                    @endif

                                    {{-- Email --}}
                                    @if($partner->email)
                                        <div>
                                            <span class="fw-semibold">Email:</span> {{ $partner->email }}
                                        </div>
                                    @endif

                                    {{-- Phone --}}
                                    @if($partner->phone)
                                        <div>
                                            <span class="fw-semibold">SĐT:</span> {{ $partner->phone }}
                                        </div>
                                    @endif

                                    {{-- Address --}}
                                    @if($partner->address)
                                        <div>
                                            <span class="fw-semibold">Địa chỉ:</span> {{ Str::limit($partner->address, 40) }}
                                        </div>
                                    @endif

                                    {{-- Không có thông tin --}}
                                    @if(!$partner->website && !$partner->email && !$partner->phone && !$partner->address)
                                        <span class="text-muted">—</span>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input
                                        class="form-check-input toggle-active"
                                        type="checkbox"
                                        data-id="{{ $partner->id }}"
                                        {{ $partner->is_active ? 'checked' : '' }}
                                    >
                                </div>                                                              
                            </td>                            
                            <td>{{ $partner->sort_order }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="{{ route('admin.partner.edit', $partner->id) }}">
                                            <i class="bx bx-edit-alt me-1"></i> Sửa
                                        </a>
                                        <form action="{{ route('admin.partner.destroy', $partner->id) }}" method="POST"
                                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa đối tác này?')">
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
                            <td colspan="8" class="text-center text-muted py-4">
                                Không có dữ liệu
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- PAGINATION --}}
        @if ($partners->hasPages())
            <div class="card-footer d-flex justify-content-between align-items-center">
                <div class="text-muted">
                    Hiển thị {{ $partners->count() }} / {{ $partners->total() }} danh mục
                </div>

                {{ $partners->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
@endsection
@push('js')
<script>
document.querySelectorAll('.toggle-active').forEach(el => {
    el.addEventListener('change', function () {
        const partnerId = this.dataset.id;

        fetch(`/admin/partner/${partnerId}`, {
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
