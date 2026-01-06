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
                <form action="{{ route('admin.menu.update', $menu->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label class="form-label">Tên Menu</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            value="{{ old('name', $menu->name) }}"
                            placeholder="Nhập tên menu">
                    </div>
                    <div class="mb-6">
                        <label class="form-label">Link truy cập</label>

                        {{-- input hiển thị full link --}}
                        <input
                            type="text"
                            class="form-control"
                            value="{{ url($menu->link) }}"
                            readonly>

                        {{-- input thật để submit --}}
                        <input
                            type="hidden"
                            name="link"
                            value="{{ $menu->link }}">
                    </div>

                    <div class="form-check form-switch form-check-reverse d-flex justify-content-start align-items-center gap-4 mb-6">
                        <label class="form-check-label" for="flexSwitchCheckDefault">
                            Hiển thị menu
                        </label>

                        {{-- gửi 0 khi unchecked --}}
                        <input type="hidden" name="is_active" value="0">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="is_active"
                            value="1"
                            id="flexSwitchCheckDefault"
                            style="width:50px;height:30px"
                            @checked($menu->is_active)
                        />
                    </div>
                    <div class="mb-6">
                        <label class="form-label">Thiết lập thứ tự hiển thị</label>
                        <input
                            type="number"
                            name="sort_order"
                            class="form-control"
                            value="{{ old('sort_order', $menu->sort_order) }}">
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