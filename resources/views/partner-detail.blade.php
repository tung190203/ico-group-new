@extends('layouts.app')

@section('title', $partners->name ?? 'Giới thiệu Đối tác')

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
        color: #000;
        position: relative;
        text-align: center;
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

    .logo-wrapper {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        display: inline-block;
        margin-bottom: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, .1);
    }

    .logo-wrapper img {
        max-width: 280px;
        height: auto;
        display: block;
    }

    .partner-name {
        font-size: 2.5rem;
        font-weight: 800;
        margin-top: 16px;
        line-height: 1.3;
    }

    /* ===== ARTICLE CONTENT ===== */
    .article-content {
        padding: 48px;
        color: #000;
    }

    .article-content h1 {
        font-size: 2rem;
        font-weight: 700;
        margin: 32px 0 16px;
    }

    .article-content h2 {
        font-size: 1.6rem;
        font-weight: 700;
        margin: 28px 0 14px;
    }

    .article-content h3 {
        font-size: 1.3rem;
        font-weight: 600;
        margin: 24px 0 12px;
    }

    .article-content p {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #444;
        margin-bottom: 20px;
        text-align: justify;
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

    .article-content img {
        max-width: 100%;
        border-radius: 12px;
        margin: 28px 0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, .1);
    }

    /* ===== PARTNER FOOTER ===== */
    .partner-footer {
        padding: 32px 48px;
        background: #f8f9fa;
        border-top: 1px solid #e9ecef;
    }

    .partner-footer-title {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: #000;
    }

    .partner-footer .partner-info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 16px 24px;
    }

    .partner-footer .partner-info-item {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        font-size: .95rem;
        line-height: 1.6;
    }

    .partner-footer .partner-info-item strong {
        min-width: 80px;
        white-space: nowrap;
        color: #000;
    }

    .partner-footer .partner-info-item a,
    .partner-footer .partner-info-item div {
        color: #374151;
        word-break: break-word;
        overflow-wrap: anywhere;
    }

    .partner-footer .partner-info-item a {
        color: #FFC300;
        text-decoration: none;
        border-bottom: 1px solid rgba(255, 195, 0, .3);
    }

    .partner-footer .partner-info-item a:hover {
        color: #000;
        border-bottom-color: #000;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
        .article-wrapper {
            padding: 40px 0;
        }

        .article-header {
            padding: 32px 24px 24px;
        }

        .logo-wrapper {
            padding: 20px;
        }

        .partner-name {
            font-size: 1.8rem;
        }

        .article-content {
            padding: 32px 24px;
        }

        .partner-footer {
            padding: 24px;
        }
    }
</style>
@endpush

@section('content')
<section class="article-wrapper">
    <div class="container">
        <article class="article-container">

            {{-- HEADER --}}
            <header class="article-header">
                @if(!empty($partners->logo))
                    <div class="logo-wrapper">
                        <img src="{{ asset('storage/' . $partners->logo) }}" alt="{{ $partners->name }}">
                    </div>
                @endif

                <h1 class="partner-name">{{ $partners->name }}</h1>
            </header>

            {{-- CONTENT --}}
            <div class="article-content">
                {!! $partners->description !!}
            </div>

            {{-- FOOTER CONTACT INFO --}}
            @if($partners->website || $partners->email || $partners->phone || $partners->address)
                <footer class="partner-footer">
                    <div class="partner-footer-title">Thông tin liên hệ</div>

                    <div class="partner-info-grid">
                        @if($partners->website)
                            <div class="partner-info-item">
                                <strong>Website:</strong>
                                <a href="{{ $partners->website }}" target="_blank" rel="noopener">
                                    {{ $partners->website }}
                                </a>
                            </div>
                        @endif

                        @if($partners->email)
                            <div class="partner-info-item">
                                <strong>Email:</strong>
                                <a href="mailto:{{ $partners->email }}">
                                    {{ $partners->email }}
                                </a>
                            </div>
                        @endif

                        @if($partners->phone)
                            <div class="partner-info-item">
                                <strong>Phone:</strong>
                                <a href="tel:{{ $partners->phone }}">
                                    {{ $partners->phone }}
                                </a>
                            </div>
                        @endif

                        @if($partners->address)
                            <div class="partner-info-item">
                                <strong>Address:</strong>
                                <div>{{ $partners->address }}</div>
                            </div>
                        @endif
                    </div>
                </footer>
            @endif

        </article>
    </div>
</section>
@endsection
