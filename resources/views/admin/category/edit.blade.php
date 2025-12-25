@extends('admin.layouts.app')

@section('title', 'Cập nhật danh mục')

@section('content')
<div class="row mb-6 gy-6">
    <div class="col-xl">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Cập nhật danh mục</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- Tên danh mục --}}
                    <div class="mb-6">
                        <label class="form-label">Tên danh mục</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            value="{{ old('name', $category->name) }}"
                            placeholder="Nhập tên danh mục"
                        >
                    </div>

                    {{-- Danh mục cha --}}
                    <div class="mb-6">
                        <label class="form-label">Chọn danh mục cha</label>
                        <select class="form-select" name="parent_id">
                            <option value="">-- Không có --</option>
                            @foreach ($categories as $id => $name)
                                <option value="{{ $id }}"
                                    {{ old('parent_id', $category->parent_id) == $id ? 'selected' : '' }}>
                                    {{ $name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Mô tả --}}
                    <div class="mb-6">
                        <label class="form-label">Mô tả</label>
                        <textarea
                            class="form-control"
                            name="description"
                            rows="3"
                        >{{ old('description', $category->description) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Cập nhật
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
