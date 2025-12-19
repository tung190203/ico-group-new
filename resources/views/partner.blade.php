@extends('layouts.app')

@section('title', 'Đối tác FDI')

@push('styles')
    <link rel="stylesheet" href="{{ asset('sneat/assets/css/style.css') }}" />
@endpush

@section('content')

<section id="tin-tuc" class="section-padding" style="background-color: #080808">
    <div class="container container-xxl">
        <div
            class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-lg-between mb-3">
            <div>
                <p class="section-title-manual">Bài viết</p>
                <h2 class="section-title !mb-0" style="font-size: 2.2rem">
                    Bài viết tiêu biểu về đối tác
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
    <section id="doi-tac-fdi" class="section-padding">
        <div class="container container-xxl">
            <p class="section-title-manual">ĐỐI TÁC FDI TIÊU BIỂU</p>
            <h2 class="section-title">Niềm tin từ những doanh nghiệp hàng đầu</h2>
            <p class="partner-caption">
                Chúng tôi tự hào là đối tác chiến lược của các tập đoàn đa quốc gia,
                mang lại nguồn nhân lực chất lượng và ổn định.
            </p>

            <div class="row justify-content-center">
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                    <a href="{{ route('post') }}">
                        <div class="partner-logo-box">
                            <img src="assets/images/branding/foxconn.png" style="width: 150px" alt="" />
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                    <a href="{{ route('post') }}">
                    <div class="partner-logo-box">
                        <img src="assets/images/branding/goertek.png" style="width: 100px" alt="" />
                    </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                    <a href="{{ route('post') }}">
                    <div class="partner-logo-box">
                        <img src="assets/images/branding/canon.svg" style="width: 100px" alt="" />
                    </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                    <a href="{{ route('post') }}">
                    <div class="partner-logo-box">
                        <img src="assets/images/branding/luxshare.svg" style="width: 160px" alt="" />
                    </div>
                    </a>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                    <a href="{{ route('post') }}">
                    <div class="partner-logo-box">
                        <img src="assets/images/branding/samkwang.png" style="width: 100px" alt="" />
                    </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                    <a href="{{ route('post') }}">
                    <div class="partner-logo-box">
                        <img src="assets/images/branding/seev.png" style="width: 100px" alt="" />
                    </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                    <a href="{{ route('post') }}">
                    <div class="partner-logo-box">
                        <img src="assets/images/branding/sconnect.png" style="width: 100px" alt="" />
                    </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                    <a href="{{ route('post') }}">
                    <div class="partner-logo-box">
                        <img src="assets/images/branding/siflex.png" style="width: 100px" alt="" />
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="lien-he" class="section-padding" style="background-color: white">
        <div class="container container-xxl">
            <div class="text-center mb-5">
                <p class="section-title-manual text-black">BIỂU MẪU ĐĂNG KÝ</p>
                <h2 class="section-title mb-3" style="font-size: 2.2rem; color: #080808">
                    Kết nối cùng ICOJob ngay hôm nay
                </h2>
                <p style="color: #000000b3; max-width: 600px; margin: 0 auto">
                    Lựa chọn biểu mẫu phù hợp để chúng tôi hỗ trợ nhanh chóng và hiệu
                    quả.
                </p>
            </div>

            <div class="row justify-content-center">
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
            </div>
        </div>
    </section>

    <section class="cta-footer-section">
        <div class="container container-xxl">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-9">
                    <p class="section-title-manual text-dark" style="font-size: 12px">
                        KÊU GỌI HÀNH ĐỘNG
                    </p>
                    <h2 class="cta-title">
                        Bạn đang cần nhân sự chất lượng? Liên hệ với ICOJob ngay hôm nay!
                    </h2>
                </div>
                <div class="col-lg-3 d-flex justify-content-lg-end">
                    <a href="#lien-he" class="btn btn-dark-cta d-flex align-items-center">
                        Gửi yêu cầu hợp tác
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener("click", function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                });
            });
        });

        // Bootstrap tooltip khởi tạo
        const tooltipTriggerList = document.querySelectorAll(
            '[data-bs-toggle="tooltip"]'
        );
        const tooltipList = [...tooltipTriggerList].map(
            (el) => new bootstrap.Tooltip(el)
        );

        const callBtn = document.getElementById("call-btn");
        const messageBtn = document.getElementById("message-btn");
        const hotlineList = document.getElementById("hotline-list");
        const messageList = document.getElementById("message-list");

        // Toggle nút gọi
        callBtn.addEventListener("click", function(e) {
            e.stopPropagation();

            // Ẩn message list nếu đang mở
            messageList.style.display = "none";

            // Toggle hotline list
            hotlineList.style.display =
                hotlineList.style.display === "block" ? "none" : "block";
        });

        // Toggle nút tin nhắn
        messageBtn.addEventListener("click", function(e) {
            e.stopPropagation();

            // Ẩn hotline list nếu đang mở
            hotlineList.style.display = "none";

            // Toggle message list
            messageList.style.display =
                messageList.style.display === "block" ? "none" : "block";
        });

        // Ẩn cả hai khi click ra ngoài
        document.addEventListener("click", function(e) {
            if (!callBtn.contains(e.target)) {
                hotlineList.style.display = "none";
            }
            if (!messageBtn.contains(e.target)) {
                messageList.style.display = "none";
            }
        });

        // Scroll lên đầu trang
        const scrollTopBtn = document.getElementById("scroll-top");
        scrollTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
@endpush
