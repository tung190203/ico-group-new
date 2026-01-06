@extends('admin.layouts.app')

@section('title', 'Thêm đối tác')

@section('content')
<div class="row mb-6 gy-6">
  <div class="col-xl">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Thêm đối tác</h5>
      </div>

      <div class="card-body">
        <form action="{{ route('admin.partner.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="mb-6">
            <label class="form-label">Tên đối tác</label>
            <input
              type="text"
              name="name"
              class="form-control"
              value="{{ old('name') }}"
              placeholder="Nhập tên đối tác">
          </div>
          <div class="mb-6">
            <div class="mb-6">
              <label for="logoInput" class="form-label">Logo</label>

              <input
                class="form-control"
                type="file"
                name="logo"
                id="logoInput"
                accept="image/*" />

              {{-- preview --}}
              <div class="mt-4 px-2">
                <img
                  id="logoPreview"
                  class="rounded d-none"
                  height="120">
              </div>
            </div>

          </div>
          <div class="mb-6">
            <label class="form-label">Mô tả</label>
            <textarea name="description" id="editor" class="form-control">
              {{ old('description') }}
          </textarea>
          </div>
          <div class="mb-6">
            <label class="form-label">Email</label>
            <input
              type="email"
              name="email"
              class="form-control"
              value="{{ old('email') }}"
              placeholder="Nhập email">
          </div>
          <div class="mb-6">
            <label class="form-label">Link Website</label>
            <input
              type="text"
              name="website"
              class="form-control"
              value="{{ old('website') }}"
              placeholder="Nhập link website đôi tác">
          </div>
          <div class="mb-6">
            <label class="form-label">Phone</label>
            <input
              type="text"
              name="phone"
              class="form-control"
              value="{{ old('phone') }}"
              placeholder="Nhập số điện thoại đối tác">
          </div>
          <div class="mb-6">
            <label class="form-label">Địa chỉ</label>
            <input
              type="text"
              name="address"
              class="form-control"
              value="{{ old('address') }}"
              placeholder="Nhập địa chỉ đối tác">
          </div>
          <div class="form-check form-switch form-check-reverse d-flex justify-content-start align-items-center gap-4 mb-6">
            <label class="form-check-label" for="flexSwitchCheckDefault">Hiển thị đối tác</label>
            <input class="form-check-input" type="checkbox" name="is_active" id="flexSwitchCheckDefault" style="width:50px;height:30px" />
          </div>
          <div class="mb-6">
            <label class="form-label">Thiết lập thứ tự hiển thị</label>
            <input
              type="number"
              name="sort_order"
              class="form-control"
              value="{{ old('sort_order') }}">
          </div>

          <button type="submit" class="btn btn-primary">
            Thêm mới
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
<script>
  const logoInput = document.getElementById('logoInput');
  const logoPreview = document.getElementById('logoPreview');

  logoInput.addEventListener('change', function() {
    const file = this.files[0];
    if (!file) return;

    // chỉ cho phép ảnh
    if (!file.type.startsWith('image/')) {
      alert('Vui lòng chọn file ảnh');
      this.value = '';
      return;
    }

    logoPreview.src = URL.createObjectURL(file);
    logoPreview.classList.remove('d-none');

    // giải phóng bộ nhớ
    logoPreview.onload = () => URL.revokeObjectURL(logoPreview.src);
  });
</script>
@endpush