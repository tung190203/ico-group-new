@extends('layouts.app')

@section('title', 'Trang chủ')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
@endpush

@section('content')

<section id="trang-chu" class="section-padding">
    <div class="container container-xxl">
        <div class="row align-items-center d-flex justify-content-evenly">
            <div class="col-lg-6">
                <p class="section-dot-title">
                    <i class="fas fa-circle" style="font-size: 0.5rem; margin-right: 0.5rem"></i>
                    BỘ KHUNG NHÂN LỰC CHO DOANH NGHIỆP FDI
                </p>
                <h1 class="hero-title text-white">
                    Kết nối nguồn nhân lực với
                    <span class="hero-subtitle">các doanh nghiệp FDI tại Việt Nam</span>
                </h1>
                <p class="hero-text">
                    ICOJob – Cầu nối nhân lực vững chắc cho doanh nghiệp FDI tại Việt
                    Nam, đồng hành cùng người lao động trên mọi chặng đường
                </p>
                <div class="btn-group-custom d-flex gap-3 flex-wrap">
                    <a href="{{ route('introduction') }}" class="btn btn-yellow-cta">Tìm hiểu ngay</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light-custom">Đăng ký ứng tuyển</a>
                </div>
            </div>

            <div class="col-lg-5 mt-5 mt-lg-0">
                <div class="hero-boxes-area">
                    <div class="d-flex lg:justify-content-between md:justify-content-start align-items-start gap-4">
                        <div class="custom-icon">🛡️</div>
                        <div>
                            <div class="box-title-separator">GIẢI PHÁP TOÀN DIỆN</div>
                            <h3 class="text-white fw-bold mb-4" style="font-size: 1.5rem">
                                Đối tác bền vững cho doanh nghiệp FDI
                            </h3>
                        </div>
                    </div>
                    <p class="mb-5" style="color: #ffffffb3; font-size: 0.875rem">
                        Từ tuyển dụng, đào tạo đến quản trị nhân lực, ICOJob đồng hành
                        cùng doanh nghiệp xây dựng đội ngũ lao động bền vững, đáp ứng
                        tiêu chuẩn chất lượng và tốc độ phát triển.
                    </p>
                    <div class="row text-center align-items-stretch">
                        <div class="col-md-4 mb-3 mb-md-0 d-flex">
                            <div class="info-box flex-fill">
                                <div class="custom-sub-icon">🏭</div>
                                <div class="info-box-number text-white">
                                    30+ Doanh nghiệp đối tác FDI
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3 mb-md-0 d-flex">
                            <div class="info-box flex-fill">
                                <div class="custom-sub-icon">👷‍♂️</div>
                                <div class="info-box-number text-white">
                                    40.000+ Lao động được cung ứng
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="info-box flex-fill">
                                <div class="custom-sub-icon">🎯</div>
                                <div class="info-box-number text-white">
                                    17 Năm kinh nghiệm thực chiến
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gioi-thieu" class="section-padding">
    <div class="container container-xxl">
        <div class="row align-items-start d-flex justify-content-evenly">
            <div class="col-lg-6">
                <h2 class="section-title" style="margin-bottom: 2.25rem; font-size: 2.2rem">
                    ICOJob – Đối tác chiến lược với các <br />
                    doanh nghiệp FDI tại Việt Nam
                </h2>
                <p style="margin-bottom: 2rem; color: #fffc; font-size: 18px">
                    ICOJob là đơn vị có 17 năm kinh nghiệm trong lĩnh vực cung ứng và
                    đào tạo lao động cho các khu công nghiệp và tập đoàn FDI trên toàn
                    quốc. Chúng tôi tạo dựng hệ sinh thái nhân lực toàn diện, đảm bảo
                    mọi doanh nghiệp đều sở hữu đội ngũ lao động phù hợp, ổn định và
                    sẵn sàng phát triển dài hạn.
                </p>
            </div>
            <div class="col-lg-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/HFuoKF6QlYc?si=-cgX7i25aJIt628L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<section id="dich-vu" class="section-padding">
    <div class="container container-xxl">
        <div class="row justify-content-between align-items-center mb-3">
            <div class="col-lg-5">
                <p class="section-title-manual">GIẢI PHÁP NHÂN LỰC</p>
                <h2 class="section-title mb-0" style="font-size: 2.2rem">
                    Dịch vụ cung ứng lao động toàn diện cho doanh nghiệp FDI
                </h2>
            </div>
            <div class="col-lg-7 mt-3 mt-lg-0">
                <p style="color: #ffffffb3">
                    ICOJob cung cấp các dịch vụ linh hoạt, tối ưu chi phí và chất
                    lượng, đáp ứng nhu cầu nhân lực từ lao động phổ thông đến lao động
                    kỹ thuật cao.
                </p>
            </div>
        </div>

        <div class="row">
            @foreach ($solutions as $s)
            <div class="col-md-6 col-lg-6 mb-4">

                <a href="{{ route('post', ['slug' => $s->slug]) }}"
                    class="d-block text-decoration-none text-reset">

                    <div class="service-box">
                        <div class="text-yellow mb-3 border border-yellow">
                            <i class="fas fa-star"></i>
                        </div>

                        <h4 class="service-box-title">{{ $s->title }}</h4>

                        <p>{{ $s->description }}</p>
                        <span class="link-arrow">
                            Tìm hiểu chi tiết
                            <span class="animate-icon">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </span>

                    </div>
                </a>

            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="doi-tac-fdi" class="section-padding">
    <div class="container container-xxl">
        <p class="section-title-manual">ĐỐI TÁC FDI TIÊU BIỂU</p>
        <h2 class="section-title">Niềm tin từ doanh nghiệp</h2>
        <p class="partner-caption">
            Chúng tôi tự hào là đối tác chiến lược của các tập đoàn đa quốc gia,
            mang lại nguồn nhân lực chất lượng và ổn định.
        </p>

        <div class="row justify-content-center">
            @foreach ($parners as $p)
            @php
            $width = 120;

            if ($loop->first) {
            $width = 150;
            } elseif ($loop->index === 3) { // thằng thứ 4
            $width = 160;
            }
            @endphp

            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <a href="{{ route('partner-detail', ['slug' => $p->slug]) }}">
                    <div class="partner-logo-box">
                        <img
                            src="{{ asset('storage/' . $p->logo) }}"
                            style="width: {{ $width }}px"
                            alt="" />
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section id="tin-tuc" class="section-padding" style="background-color: #080808">
    <div class="container container-xxl">
        <div
            class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-lg-between mb-3">
            <div>
                <p class="section-title-manual">TIN TỨC & CÂU CHUYỆN</p>
                <h2 class="section-title !mb-0" style="font-size: 2.2rem">
                    Hành trình của doanh nghiệp FDI và người lao động
                </h2>
            </div>
            <a href="#" class="link-arrow d-md-block">Xem tất cả <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="news-box">
                    <div class="news-meta">
                        <span class="section-title-news">CASE STUDY</span>
                        <span class="section-title-news">15/10/2025</span>
                    </div>
                    <h4 class="news-title">
                        Tăng tốc tuyển dụng lao động kỹ thuật cho nhà máy mới tại Bắc
                        Ninh
                    </h4>
                    <p>
                        ICOJob hỗ trợ hoàn hơn 500 hồ sơ nhân lực kỹ thuật trong 45
                        ngày.
                    </p>
                    <a href="#" class="link-arrow">Xem chi tiết <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="news-box">
                    <div class="news-meta">
                        <span class="section-title-news">CÂU CHUYỆN</span>
                        <span class="section-title-news">06/09/2025</span>
                    </div>
                    <h4 class="news-title">
                        Chia sẻ từ công nhân: Hành trình vươn mình tại doanh nghiệp Hàn
                        Quốc
                    </h4>
                    <p>
                        Nguyễn Văn Khánh - tổ trưởng chuyên lắp ráp, Luxshare Việt Nam.
                    </p>
                    <a href="#" class="link-arrow">Xem chi tiết <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="news-box">
                    <div class="news-meta">
                        <span class="section-title-news">TIN TỨC</span>
                        <span class="section-title-news">28/08/2025</span>
                    </div>
                    <h4 class="news-title">
                        Xu hướng tuyển dụng lao động FDI cuối năm 2025
                    </h4>
                    <p>
                        Tổng hợp nhu cầu tuyển dụng và kỹ năng nổi bật được ưu tiên.
                    </p>
                    <a href="#" class="link-arrow">Xem chi tiết <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="lien-he" class="section-padding" style="background-color: white">
    <div class="container container-xxl">
        <div class="text-center mb-5">
            <p class="section-title-manual text-black">BIỂU MẪU ĐĂNG KÝ</p>
            <h2 class="section-title mb-3" style="font-size: 2.2rem; color: #080808">
                Hãy kết nối cùng ICOJob ngay hôm nay
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
                        <div class="text-warning me-3">
                            <i class="fas fa-lightbulb fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="text-dark fw-bold mb-0">
                                Đăng ký hợp tác cùng ICOJob
                            </h4>
                            <p class="text-secondary mb-0" style="font-size: 0.875rem; color: #ffffffb3">
                                Dành cho các doanh nghiệp FDI có nhu cầu tuyển dụng hoặc hợp
                                tác cung ứng nhân lực.
                            </p>
                        </div>
                    </div>

                    <form>
                        <div class="form-group-custom">
                            <label for="companyName" class="text-dark mb-2">Tên doanh nghiệp</label>
                            <input type="text" class="form-control form-control-custom-light" id="companyName"
                                placeholder="Nhập tên doanh nghiệp"
                                style="background-color: #f0f0f0; border-color: #ddd" />
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group-custom">
                                <label for="contactPerson" class="text-dark mb-2">Họ tên người liên hệ</label>
                                <input type="text" class="form-control form-control-custom-light"
                                    id="contactPerson" placeholder="Ví dụ: Nguyễn Văn A"
                                    style="background-color: #f0f0f0; border-color: #ddd" />
                            </div>
                            <div class="col-md-6 form-group-custom">
                                <label for="contactEmail" class="text-dark mb-2">Email / Số điện thoại</label>
                                <input type="email" class="form-control form-control-custom-light"
                                    id="contactEmail" placeholder="example@icojob.vn"
                                    style="background-color: #f0f0f0; border-color: #ddd" />
                            </div>
                        </div>
                        <div class="form-group-custom">
                            <label for="recruitmentVolume" class="text-dark mb-2">Vị trí / Số lượng cần tuyển</label>
                            <input type="text" class="form-control form-control-custom-light"
                                id="recruitmentVolume" placeholder="Ví dụ: 200 công nhân, 50 kỹ thuật viên"
                                style="background-color: #f0f0f0; border-color: #ddd" />
                        </div>
                        <div class="form-group-custom">
                            <label for="specificRequirement" class="text-dark mb-2">Ghi chú hoặc yêu cầu cụ
                                thể</label>
                            <textarea class="form-control form-control-textarea" id="specificRequirement" rows="3"
                                placeholder="Chia sẻ thêm về yêu cầu hoặc chi tiết chọn lọc"
                                style="background-color: #f0f0f0; border-color: #ddd"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning w-100 py-3 mt-3 btn-partner-custom">
                            Gửi yêu cầu hợp tác
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="contact-form-area h-100" style="background-color: var(--ico-box-dark) !important">
                    <div class="d-flex align-items-center mb-4">
                        <div class="text-warning me-3">
                            <i class="fas fa-user-tie fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="text-white fw-bold mb-0">
                                Đăng ký ứng tuyển ngay
                            </h4>
                            <p class="text-secondary mb-0" style="font-size: 0.875rem; color: #ffffffb3">
                                Dành cho người lao động phổ thông hoặc kỹ thuật muốn tìm
                                việc tại doanh nghiệp FDI.
                            </p>
                        </div>
                    </div>

                    <form>
                        <div class="form-group-custom">
                            <label for="applicantName" class="text-white mb-2">Họ và tên</label>
                            <input type="text" class="form-control form-control-custom" id="applicantName"
                                placeholder="Nhập Họ và tên" />
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group-custom">
                                <label for="birthYear" class="text-white mb-2">Năm sinh</label>
                                <input type="number" class="form-control form-control-custom" id="birthYear"
                                    placeholder="1998" />
                            </div>
                            <div class="col-md-6 form-group-custom">
                                <label for="gender" class="text-white mb-2">Giới tính</label>
                                <select class="form-select form-select-custom" id="gender">
                                    <option selected>Nam</option>
                                    <option>Nữ</option>
                                    <option>Khác</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group-custom">
                            <label for="applicantPhone" class="text-white mb-2">Số điện thoại</label>
                            <input type="tel" class="form-control form-control-custom" id="applicantPhone"
                                placeholder="Nhập số điện thoại" />
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group-custom">
                                <label for="educationLevel" class="text-white mb-2">Trình độ học vấn / Tay
                                    nghề</label>
                                <input type="text" class="form-control form-control-custom" id="educationLevel"
                                    placeholder="Trung cấp / Kỹ thuật viên" />
                            </div>
                            <div class="col-md-6 form-group-custom">
                                <label for="workArea" class="text-white mb-2">Khu vực muốn làm việc</label>
                                <select class="form-select form-select-custom" id="workArea">
                                    <option selected>Bắc Ninh</option>
                                    <option>Hải Phòng</option>
                                    <option>Quảng Ninh</option>
                                    <option>Hà Nội</option>
                                    <option>TP.HCM</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning w-100 py-3 mt-3 btn-apply-custom">
                            Nộp thông tin ứng tuyển
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-footer-section">
    <div class="container container-xxl">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 text-center mb-2 mb-md-0 d-flex gap-3 justify-content-center">
                <span class="custom-text-footer text-white">ĐỒNG HÀNH</span>
                <span class="custom-text-footer">TRỌN VẸN</span>
            </div>
            <div class="col-md-12 d-flex gap-2 justify-content-center">
                <span class="custom-text-footer text-white mt-2">ĐỒNG HÀNH</span>
                <img src="assets/images/logo-white.png" alt="" class="sub-footer-logo" />
            </div>
        </div>
    </div>
</section>

@endsection