@extends('admin.layouts.app')

@section('title', 'Cập nhật đối tác')

@section('content')
<div class="row mb-6 gy-6">
    <div class="col-xl">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Cập nhật đối tác</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.partner.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label class="form-label">Tên đối tác</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            value="{{ old('name', $partner->name) }}"
                            placeholder="Nhập tên đối tác">
                    </div>
                    <div class="mb-6">
                        <label for="formFile" class="form-label">Logo</label>
                        <input
                            class="form-control"
                            type="file"
                            name="logo"
                            id="logoInput"
                            accept="image/*" />

                        @if ($partner->logo)
                        <div class="mt-4 px-2">
                            <img
                                id="logoPreview"
                                src="{{ asset('storage/' . $partner->logo) }}"
                                class="rounded"
                                height="120">
                        </div>
                        @else
                        <div class="mt-4 px-2">
                            <img
                                id="logoPreview"
                                class="rounded d-none"
                                height="120">
                        </div>
                        @endif

                    </div>
                    <div class="mb-6">
            <label class="form-label">Mô tả</label>
            <textarea name="description" id="editor" class="form-control">
              {{ old('description', $partner->description ?? '') }}
          </textarea>
          </div>
                    <div class="mb-6">
                        <label class="form-label">Email</label>
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email', $partner->email) }}"
                            placeholder="Nhập email">
                    </div>
                    <div class="mb-6">
                        <label class="form-label">Link Website</label>
                        <input
                            type="text"
                            name="website"
                            class="form-control"
                            value="{{ old('website', $partner->website) }}"
                            placeholder="Nhập link website đôi tác">
                    </div>
                    <div class="mb-6">
                        <label class="form-label">Phone</label>
                        <input
                            type="text"
                            name="phone"
                            class="form-control"
                            value="{{ old('phone', $partner->phone) }}"
                            placeholder="Nhập số điện thoại đối tác">
                    </div>
                    <div class="mb-6">
                        <label class="form-label">Địa chỉ</label>
                        <input
                            type="text"
                            name="address"
                            class="form-control"

                            value="{{ old('address', $partner->address) }}"
                            placeholder="Nhập địa chỉ đối tác">
                    </div>
                    <div class="form-check form-switch form-check-reverse d-flex justify-content-start align-items-center gap-4 mb-6">
                        <label class="form-check-label" for="flexSwitchCheckDefault">
                            Hiển thị đối tác
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
                            @checked($partner->is_active)
                        />
                    </div>
                    <div class="mb-6">
                        <label class="form-label">Thiết lập thứ tự hiển thị</label>
                        <input
                            type="number"
                            name="sort_order"
                            class="form-control"
                            value="{{ old('sort_order', $partner->sort_order) }}">
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
@push('js')
<script>
    document.getElementById('logoInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (!file) return;

        const preview = document.getElementById('logoPreview');
        preview.src = URL.createObjectURL(file);
        preview.classList.remove('d-none');

        // cleanup memory
        preview.onload = () => URL.revokeObjectURL(preview.src);
    });
</script>
@endpush