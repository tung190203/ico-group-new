@extends('layouts.app')

@section('title', Str::limit($post->title ?? 'Bài viết', 50))

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
<style>
    body {
        background: #f8f9fa;
    }

    /* ===== ARTICLE WRAPPER ===== */
    .article-wrapper {
        padding: 80px 0;
    }

    .article-container {
        max-width: 820px;
        margin: 0 auto;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, .08);
        overflow: hidden;
    }

    /* ===== ARTICLE HEADER ===== */
    .article-header {
        padding: 48px 48px 32px;
        background: #FFC300;
        color: #000000;
        position: relative;
    }

    .article-header::after {
        content: '';
        position: absolute;
        bottom: -20px;
        left: 0;
        right: 0;
        height: 20px;
        background: #fff;
        border-radius: 20px 20px 0 0;
    }

    .article-category {
        display: inline-block;
        background: #000000;
        color: #FFFFFF;
        padding: 6px 16px;
        border-radius: 20px;
        font-size: .85rem;
        font-weight: 600;
        margin-bottom: 16px;
    }

    .article-header h1 {
        font-size: 2.5rem;
        font-weight: 800;
        margin: 0;
        line-height: 1.3;
    }

    .article-meta {
        display: flex;
        gap: 24px;
        margin-top: 20px;
        font-size: .9rem;
        opacity: .9;
    }

    .article-meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    /* ===== ARTICLE CONTENT ===== */
    .article-content {
        padding: 48px;
    }

    /* Typography cho nội dung từ DB */
    .article-content h1 {
        font-size: 2rem;
        font-weight: 700;
        margin: 32px 0 16px;
        color: #1a1a1a;
        line-height: 1.3;
    }

    .article-content h2 {
        font-size: 1.6rem;
        font-weight: 700;
        margin: 28px 0 14px;
        color: #2d3436;
        line-height: 1.4;
    }

    .article-content h3 {
        font-size: 1.3rem;
        font-weight: 600;
        margin: 24px 0 12px;
        color: #2d3436;
    }

    .article-content p {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #444;
        margin-bottom: 20px;
    }

    .article-content ul,
    .article-content ol {
        margin: 20px 0;
        padding-left: 24px;
    }

    .article-content li {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #444;
        margin-bottom: 12px;
    }

    .article-content ul li::marker {
        color: #FFC300;
        font-weight: bold;
    }

    .article-content strong,
    .article-content b {
        font-weight: 700;
        color: #000000;
    }

    .article-content a {
        color: #FFC300;
        text-decoration: none;
        border-bottom: 1px solid rgba(255, 195, 0, .3);
        transition: all .3s ease;
    }

    .article-content a:hover {
        color: #000000;
        border-bottom-color: #000000;
    }

    .article-content blockquote {
        margin: 28px 0;
        padding: 24px 28px;
        background: #f8f9fa;
        border-left: 4px solid #FFC300;
        border-radius: 0 8px 8px 0;
        font-style: italic;
        color: #555;
    }

    .article-content img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        margin: 28px 0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, .1);
    }

    .article-content hr {
        border: none;
        height: 2px;
        background: linear-gradient(90deg, transparent, #e0e0e0, transparent);
        margin: 40px 0;
    }

    /* ===== ARTICLE FOOTER ===== */
    .article-footer {
        padding: 32px 48px;
        background: #f8f9fa;
        border-top: 1px solid #e9ecef;
    }

    .article-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .article-tag {
        display: inline-block;
        padding: 6px 14px;
        background: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 20px;
        font-size: .85rem;
        color: #666;
        transition: all .3s ease;
    }

    .article-tag:hover {
        background: #FFC300;
        color: #000000;
        border-color: #FFC300;
    }

    .article-share {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .article-share-label {
        font-weight: 600;
        color: #666;
        font-size: .9rem;
    }

    .share-btn {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #FFFFFF;
        border: 1px solid #e0e0e0;
        color: #000000;
        transition: all .3s ease;
        text-decoration: none;
    }

    .share-btn:hover {
        background: #FFC300;
        color: #000000;
        border-color: #FFC300;
        transform: translateY(-2px);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
        .article-wrapper {
            padding: 40px 0;
        }

        .article-header {
            padding: 32px 24px 24px;
        }

        .article-header h1 {
            font-size: 1.8rem;
        }

        .article-content {
            padding: 32px 24px;
        }

        .article-footer {
            padding: 24px;
        }

        .article-content h1 {
            font-size: 1.6rem;
        }

        .article-content h2 {
            font-size: 1.3rem;
        }

        .article-content p,
        .article-content li {
            font-size: 1rem;
        }
    }
</style>
@endpush

@section('content')

<section class="article-wrapper">
    <div class="container">
        <article class="article-container">
            
            <!-- Header -->
            <header class="article-header">
                <span class="article-category">{{ $post->category?->name }}</span>
                <h1>{{ $post->title ?? 'Tiêu đề bài viết' }}</h1>
                <div class="article-meta">
                    <div class="article-meta-item">
                        <strong>Ngày đăng:</strong><span>{{ $post->created_at }}</span>
                    </div>
                    <div class="article-meta-item">
                        <strong>Tác giả:</strong><span>{{ $post->author?->name }}</span>
                    </div>
                    <div class="article-meta-item">
                        <span>{{ $post->view_count ?? 0 }} lượt xem</span>
                    </div>
                </div>
            </header>

            <!-- Content từ DB -->
            <div class="article-content">
                {!! $post->content ?? '<p>Nội dung bài viết sẽ hiển thị ở đây...</p>' !!}
            </div>

            <!-- Footer -->
            <footer class="article-footer">
                <div class="article-tags">
                    @if(isset($post->tags))
                        @foreach($post->tags as $tag)
                            <span class="article-tag">#{{ $tag }}</span>
                        @endforeach
                    @endif
                </div>
            </footer>

        </article>
    </div>
</section>

<section id="lien-he" class="section-padding">
    <div class="container container-xxl">
        <div class="text-center mb-5">
            <p class="section-title-manual text-black">BIỂU MẪU ĐĂNG KÝ</p>
            <h2 class="section-title mb-3" style="font-size: 2.2rem; color: #080808">
                Đăng kí đì làm , đi học ngay hôm nay
            </h2>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="contact-form-area h-100 bg-light"
                    style="
              background-color: white !important;
              border: 1px solid var(--ico-yellow);
            ">
                    <div class="d-flex align-items-center mb-4">
                        <div>
                            <h4 class="text-dark fw-bold mb-0">
                                Đăng ký đi làm ngay
                            </h4>
                        </div>
                    </div>

                    <form>
                        <div class="row">
                            <div class="col-md-6 form-group-custom">
                                <label for="name" class="text-dark mb-2">Họ và tên</label>
                                <input type="text" class="form-control form-control-custom-light"
                                    id="name" placeholder="Ví dụ: Nguyễn Văn A"
                                    style="background-color: #f0f0f0; border-color: #ddd" />
                            </div>
                            <div class="col-md-6 form-group-custom">
                                <label for="birth" class="text-dark mb-2">Ngày sinh</label>
                                <input type="date" id="birth" class="form-control form-control-custom-light"
                                    style="background-color: #f0f0f0; border-color: #ddd; color: #000000;" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group-custom">
                                <label for="gender" class="text-dark mb-2">Giới tính</label>
                                <select class="form-select form-select-custom-light" id="gender">
                                    <option selected>Nam</option>
                                    <option>Nữ</option>
                                    <option>Khác</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group-custom">
                                <label for="phone" class="text-dark mb-2">Số điện thoại (Bắt buộc)</label>
                                <input type="text" id="phone" class="form-control form-control-custom-light" placeholder="0123456789"
                                    style="background-color: #f0f0f0; border-color: #ddd; color: #000000;" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group-custom">
                                <label for="level" class="text-dark mb-2">Trình độ</label>
                                <select class="form-select form-select-custom-light" id="level">
                                    <option selected>Cấp 3</option>
                                    <option>Cao đẳng</option>
                                    <option>Đại học</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group-custom">
                                <label for="company" class="text-dark mb-2">Công ty</label>
                                <select class="form-select form-select-custom-light" id="company">
                                    @foreach ($parners as $p)
                                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group-custom">
                            <label for="specificRequirement" class="text-dark mb-2">Địa chỉ</label>
                            <textarea class="form-control form-control-textarea" id="specificRequirement" rows="2"
                                placeholder="Nhập địa chỉ"
                                style="background-color: #f0f0f0; border-color: #ddd"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning w-100 py-3 mt-3 btn-partner-custom">
                            Gửi yêu cầu
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="contact-form-area h-100 bg-light"
                    style="
              background-color: white !important;
              border: 1px solid var(--ico-yellow);
            ">
                    <div class="d-flex align-items-center mb-4">
                        <div>
                            <h4 class="text-dark fw-bold mb-0">
                                Đăng ký đi học ngay
                            </h4>
                        </div>
                    </div>

                    <form>
                        <div class="row">
                            <div class="col-md-6 form-group-custom">
                                <label for="name" class="text-dark mb-2">Họ và tên</label>
                                <input type="text" class="form-control form-control-custom-light"
                                    id="name" placeholder="Ví dụ: Nguyễn Văn A"
                                    style="background-color: #f0f0f0; border-color: #ddd" />
                            </div>
                            <div class="col-md-6 form-group-custom">
                                <label for="birth" class="text-dark mb-2">Ngày sinh</label>
                                <input type="date" id="birth" class="form-control form-control-custom-light"
                                    style="background-color: #f0f0f0; border-color: #ddd; color: #000000;" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group-custom">
                                <label for="gender" class="text-dark mb-2">Giới tính</label>
                                <select class="form-select form-select-custom-light" id="gender">
                                    <option selected>Nam</option>
                                    <option>Nữ</option>
                                    <option>Khác</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group-custom">
                                <label for="phone" class="text-dark mb-2">Số điện thoại (Bắt buộc)</label>
                                <input type="text" id="phone" class="form-control form-control-custom-light" placeholder="0123456789"
                                    style="background-color: #f0f0f0; border-color: #ddd; color: #000000;" />
                            </div>
                        </div>
                        <div class="form-group-custom">
                            <label for="specificRequirement" class="text-dark mb-2">Địa chỉ</label>
                            <textarea class="form-control form-control-textarea" id="specificRequirement" rows="2"
                                placeholder="Nhập địa chỉ"
                                style="background-color: #f0f0f0; border-color: #ddd"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group-custom">
                                <label for="gender" class="text-dark mb-2">Khoá Học</label>
                                <select class="form-select form-select-custom-light" id="gender">
                                    @foreach ($courses as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning w-100 py-3 mt-3 btn-partner-custom">
                            Gửi yêu cầu
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection