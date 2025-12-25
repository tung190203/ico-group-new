@extends('admin.layouts.app')

@section('title', 'Quản lý danh mục')

@section('content')
<div class="row mb-6 gy-6">
    <div class="col-xl">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Thêm mới danh mục</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('admin.category.store') }}" method="post">
            @csrf
            <div class="mb-6">
              <label class="form-label" for="basic-default-fullname">Tên danh mục</label>
              <input type="text" name="name" class="form-control" id="basic-default-fullname" placeholder="Nhập tên danh mục" />
            </div>
            <div class="mb-6">
                <label class="form-label" for="basic-default-parent">Chọn danh mục cha</label>
                <select class="form-select" name="parent_id">
                        <option value="">--Chọn danh mục cha--</option>
                    @foreach ($categories as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
              </div>
            <div class="mb-6">
              <label class="form-label" for="basic-default-message">Mô tả (optional)</label>
              <textarea
                id="basic-default-message"
                class="form-control"
                name="description"
                placeholder="Nhập mô tả danh mục"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tạo mới</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
