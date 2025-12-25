@extends('admin.layouts.unauth')

@section('title', '404 Not Found')

@section('content')
<div class="container-xxl container-p-y">
    <div class="misc-wrapper">
      <h1 class="mb-2 mx-2" style="line-height: 6rem; font-size: 6rem">404</h1>
      <h4 class="mb-2 mx-2">
        Oops! Trang không tìm thấy
      </h4>
      <p class="mb-6 mx-2">
        Trang bạn đang tìm kiếm không tồn tại. Vui lòng kiểm tra lại đường dẫn.
      </p>
      <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Quay về trang chủ</a>
      <div class="mt-6">
        <img
          src="{{ asset('sneat/assets/img/illustrations/page-misc-error-light.png') }}"
          alt="page-misc-error-light"
          width="500"
          class="img-fluid" />
      </div>
    </div>
  </div>
@endsection