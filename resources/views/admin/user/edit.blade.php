@extends('admin.layouts.app')

@section('title', 'Cập nhật người dùng')

@section('content')
<div class="row mb-6 gy-6">
  <div class="col-xl">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Cập nhật người dùng</h5>
      </div>

      <div class="card-body">
        <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
          @csrf
          @method('PUT')

          {{-- Name --}}
          <div class="mb-6">
            <label class="form-label">Tên người dùng</label>
            <input
              type="text"
              name="name"
              class="form-control"
              value="{{ old('name', $user->name) }}"
              placeholder="Nhập tên người dùng">
          </div>

          {{-- Username --}}
          <div class="mb-6">
            <label class="form-label">Username</label>
            <input
              type="text"
              name="username"
              class="form-control"
              value="{{ old('username', $user->username) }}"
              placeholder="Nhập username">
          </div>

          {{-- Email --}}
          <div class="mb-6">
            <label class="form-label">Email</label>
            <input
              type="email"
              name="email"
              class="form-control"
              value="{{ old('email', $user->email) }}"
              placeholder="example@gmail.com">
          </div>

          {{-- Password --}}
          <div class="mb-6 position-relative">
            <label class="form-label">Password</label>

            <input
              type="password"
              name="password"
              id="password"
              class="form-control pe-5"
              placeholder="Nhập password">

            <i
              class="bx bx-hide password-toggle-icon"
              id="togglePassword">
            </i>
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

@push('css')
<style>
  .password-toggle-icon {
    position: absolute;
    top: 70%;
    right: 15px;
    transform: translateY(-50%);
    cursor: pointer;
    font-size: 20px;
    color: #6c757d;
  }

  .password-toggle-icon:hover {
    color: #000;
  }
</style>
@endpush

@push('js')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        this.classList.remove('bx-hide');
        this.classList.add('bx-show');
      } else {
        passwordInput.type = 'password';
        this.classList.remove('bx-show');
        this.classList.add('bx-hide');
      }
    });
  });
</script>
@endpush
