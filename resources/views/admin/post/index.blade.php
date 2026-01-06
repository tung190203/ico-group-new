@extends('admin.layouts.app')

@section('title', 'Quản lý bài viết')

@section('content')
<h3 class="mb-4">Quản lý bài viết</h3>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-end gap-3">
        <form method="GET" action="{{ route('admin.post.index') }}" class="d-flex gap-2 flex-grow-1">
            <div>
                <label class="form-label">Tìm kiếm bài viết</label>
                <input
                    type="text"
                    name="query"
                    class="form-control"
                    placeholder="Nhập tiêu đề..."
                    value="{{ request('query') }}">
            </div>

            <div>
                <label class="form-label">Danh mục</label>
                <select name="category_id" class="form-select" onchange="this.form.submit()">
                    <option value="">Tất cả</option>
                    @foreach ($categories as $c)
                    <option value="{{ $c->id }}"
                        {{ request('category_id') == $c->id ? 'selected' : '' }}>
                        {{ $c->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="form-label">Trạng thái</label>
                <select name="status" class="form-select" onchange="this.form.submit()">
                    <option value="">Tất cả</option>
                    <option value="draft" @selected(request('status')==='draft' )>
                        Bản nháp
                    </option>
                    <option value="published" @selected(request('status')==='published' )>
                        Xuất bản
                    </option>
                    <option value="archived" @selected(request('status')==='archived' )>
                        Lưu trữ
                    </option>
                </select>
            </div>

        </form>

        <a href="{{ route('admin.post.create') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i> Tạo mới
        </a>
    </div>

    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>Tiêu đề</th>
                    <th>Danh mục</th>
                    <th>Số lượt xem</th>
                    <th>Tags</th>
                    <th>Trạng thái</th>
                    <th width="120">Hành động</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($posts as $index => $post)
                <tr>
                    <td>{{ $posts->firstItem() + $index }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category?->name ?? '-' }}</td>
                    <td>{{ $post->view_count ?? 0 }}</td>

                    <td>
                        @php
                        $tags = $post->tags ?? [];
                        $visibleTags = array_slice($tags, 0, 3);
                        $remainingCount = count($tags) - 3;
                        @endphp

                        @if(count($tags) > 0)
                        @foreach($visibleTags as $tag)
                        <span class="badge bg-info me-1 mb-1">{{ $tag }}</span>
                        @endforeach

                        @if($remainingCount > 0)
                        <span class="badge bg-secondary mb-1"
                            data-bs-toggle="tooltip"
                            title="{{ implode(', ', array_slice($tags, 3)) }}">
                            +{{ $remainingCount }}
                        </span>
                        @endif
                        @else
                        <span class="text-muted">—</span>
                        @endif
                    </td>

                    <td>
                        @php
                        $status = $post->status;

                        $statusMap = [
                        'draft' => ['label' => 'Bản nháp', 'class' => 'bg-warning text-dark'],
                        'published' => ['label' => 'Xuất bản', 'class' => 'bg-success'],
                        'archived' => ['label' => 'Lưu trữ', 'class' => 'bg-secondary'],
                        ];
                        @endphp

                        <span class="badge {{ $statusMap[$status]['class'] ?? 'bg-dark' }}">
                            {{ $statusMap[$status]['label'] ?? ucfirst($status) }}
                        </span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('admin.post.edit', $post->id) }}">
                                    <i class="bx bx-edit-alt me-1"></i> Sửa
                                </a>
                                <form action="{{ route('admin.post.destroy', $post->id) }}" method="POST"
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
    @if ($posts->hasPages())
    <div class="card-footer d-flex justify-content-between align-items-center">
        <div class="text-muted">
            Hiển thị {{ $posts->count() }} / {{ $posts->total() }} bài viết
        </div>

        {{ $posts->links('pagination::bootstrap-5') }}
    </div>
    @endif
</div>
@endsection