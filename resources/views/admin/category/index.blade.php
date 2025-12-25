@extends('admin.layouts.app')

@section('title', 'Quản lý danh mục')

@section('content')
<h3 class="mb-4">Quản lý danh mục</h3>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-end">
            <form method="GET" action="{{ route('admin.category.index') }}">
                <label class="form-label">Tìm kiếm danh mục</label>
                <input
                    type="text"
                    name="query"
                    class="form-control"
                    placeholder="Tìm kiếm"
                    value="{{ request('query') }}"
                >
            </form>            
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i> Tạo mới
        </a>
    </div>

    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>Tên danh mục</th>
                    <th>Mô tả</th>
                    <th>Danh mục cha</th>
                    <th width="120">Hành động</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($categories as $index => $category)
                    <tr>
                        <td>{{ $categories->firstItem() + $index }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description ?? '-' }}</td>
                        <td>
                            @if($category->parent)
                                <span class="badge bg-label-info">
                                    {{ $category->parent->name }}
                                </span>
                            @else
                                <span class="text-muted">Không có</span>
                            @endif
                        </td>                        
                        <td>
                            <div class="dropdown">
                                <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('admin.category.edit', $category->id) }}">
                                        <i class="bx bx-edit-alt me-1"></i> Sửa
                                    </a>                                    
                                    <form action="{{ route('admin.category.destroy', $category->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')">
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
    @if ($categories->hasPages())
        <div class="card-footer d-flex justify-content-between align-items-center">
            <div class="text-muted">
                Hiển thị {{ $categories->count() }} / {{ $categories->total() }} danh mục
            </div>

            {{ $categories->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection
