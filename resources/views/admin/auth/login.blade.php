@extends('admin.layouts.unauth')

@section('title', 'Login')

@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card px-sm-6 px-0">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="index.html" class="app-brand-link gap-2">
                                <span class="app-brand-text demo text-heading fw-bold">Ico Group</span>
                            </a>
                        </div>
                        <h4 class="mb-2">Xin chào!</h4>

                        <form class="mb-6" action="{{ route('admin.login.process') }}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="email" class="form-label">Email hoặc Tên đăng nhập</label>
                                <input type="text" class="form-control" id="email" name="login"
                                    placeholder="Nhập email hoặc tên đăng nhập" value="{{ old('login') }}" autofocus />
                            </div>
                            @if ($errors->has('login_error'))
                                <div class="text-danger">{{ $errors->first('login_error') }}</div>
                            @endif
                            <div class="mb-6 form-password-toggle">
                                <label class="form-label" for="password">Mật khẩu</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i
                                            class="icon-base bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-8">
                                <div class="d-flex justify-content-between">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="remember-me" />
                                        <label class="form-check-label" for="remember-me"> Ghi nhớ đăng nhập </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <button class="btn btn-primary d-grid w-100" type="submit">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection