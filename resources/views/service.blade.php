@extends('layouts.app')

@section('title', 'Dịch vụ')

@push('styles')
    <link rel="stylesheet" href="{{ asset('sneat/assets/css/style.css') }}" />
@endpush

@section('content')
    <div class="bg-white text-black h-full">
        <div class="container container-xxl py-4">
            <div class="d-inline-block position-relative text-center w-100 mb-4">
                <h1 class="position-relative introduce">DỊCH VỤ CỦA ICOJOB</h1>
                <div class="position-absolute start-50 translate-middle-x line">
                </div>
                <p class="position-absolute start-50 translate-middle-x subtitle">ICOJOB cung cấp các dịch vụ nhân lực toàn
                    diện cho doanh nghiệp FDI – từ cung ứng lao động phổ thông, kỹ thuật đến đào tạo nghề và ngoại ngữ. Đồng
                    hành cùng người lao động Việt Nam chinh phục cơ hội việc làm chất lượng cao.</p>
            </div>
            <section class="row gx-5 gy-3 justify-content-center align-items-center"
                style="margin-top: 200px;margin-bottom:100px">
                <div class="col-md-6">
                    <!-- Thẻ Hình Ảnh chính -->
                    <a href="#" class="d-block text-decoration-none card-zoom-container-service">

                        <!-- Vùng chứa hình ảnh -->
                        <div class="card-img-wrapper-service">
                            <img class="card-img-custom-service"
                                src="https://file3.qdnd.vn/data/images/0/2023/05/03/vuhuyen/khanhphan.jpg?dpi=150&quality=100&w=870"
                                alt="Ảnh đại diện ICOJob"
                                onerror="this.onerror=null;this.src='https://file3.qdnd.vn/data/images/0/2023/05/03/vuhuyen/khanhphan.jpg?dpi=150&quality=100&w=870';">
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <h2 class="service-title">Cung ứng lao động phổ thông – Nhanh, kỷ luật, chất lượng</h2>
                    <p class="service-subtitle">Mỗi năm ICOJOB cung ứng cho các doanh nghiệp FDI một con số lý tưởng từ
                        10.000 - 15.000 lao động. Đội ngũ lao động phổ thông được đào tạo bài bản, tác phong công nghiệp
                        cao, sẵn sàng đáp ứng nhanh mọi nhu cầu tuyển dụng của doanh nghiệp. Từ công nhân sản xuất, đóng
                        gói, vận hành máy móc cho đến nhân viên hỗ trợ kỹ thuật, ICOJOB đảm bảo cung cấp nguồn nhân lực ổn
                        định, có tính kỷ luật và hiệu suất cao.</p>
                    <h3 class="benefit">👉 Lợi ích nổi bật:</h3>
                    <ul class="list-benefit">
                        <li class="d-flex justify-content-start align-items-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                data-yw-s="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <span>Tối ưu thời gian tuyển dụng</span>
                        </li>
                        <li class="d-flex justify-content-start align-items-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                data-yw-s="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <span>Ổn định nhân sự dài hạn</span>
                        </li>
                        <li class="d-flex justify-content-start align-items-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                data-yw-s="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <span>Giảm thiểu rủi ro nghỉ việc đột xuất</span>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <section class="section-padding" style="background-color: #080808">
            <div class="container container-xxl">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6">
                        <h2 class="service-title">Cung ứng lao động kỹ thuật – Lao động có trình độ cao</h2>
                        <p class="service-subtitle text-white">Năng lực cung ứng hiện tại: 300 - 400 lao động/năm. Đối với
                            các doanh nghiệp FDI có dây chuyền công nghệ cao, ICOJOB cung cấp kỹ sư, kỹ thuật viên và nhân
                            sự có tay nghề cao, đáp ứng tiêu chuẩn khắt khe về kỹ thuật và quy trình sản xuất.</p>
                        <h3 class="benefit text-white">👉 Lợi ích nổi bật:</h3>
                        <ul class="list-benefit text-white">
                            <li class="d-flex justify-content-start align-items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                    aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                    data-yw-s="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <span>Hệ thống dữ liệu lớn nhờ 15 năm kinh nghiệm từ ICOGroup</span>
                            </li>
                            <li class="d-flex justify-content-start align-items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                    aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                    data-yw-s="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <span>Kênh tuyển dụng online + offline phủ toàn quốc</span>
                            </li>
                            <li class="d-flex justify-content-start align-items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                    aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                    data-yw-s="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <span>Cung cấp hồ sơ ứng viên ngay lập tức từ hệ thống ICOLanguage</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <!-- Thẻ Hình Ảnh chính -->
                        <a href="#" class="d-block text-decoration-none card-zoom-container-service">

                            <!-- Vùng chứa hình ảnh -->
                            <div class="card-img-wrapper-service">
                                <img class="card-img-custom-service"
                                    src="https://file3.qdnd.vn/data/images/0/2023/05/03/vuhuyen/khanhphan.jpg?dpi=150&quality=100&w=870"
                                    alt="Ảnh đại diện ICOJob"
                                    onerror="this.onerror=null;this.src='https://file3.qdnd.vn/data/images/0/2023/05/03/vuhuyen/khanhphan.jpg?dpi=150&quality=100&w=870';">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container container-xxl">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6">
                        <!-- Thẻ Hình Ảnh chính -->
                        <a href="#" class="d-block text-decoration-none card-zoom-container-service">

                            <!-- Vùng chứa hình ảnh -->
                            <div class="card-img-wrapper-service">
                                <img class="card-img-custom-service"
                                    src="https://file3.qdnd.vn/data/images/0/2023/05/03/vuhuyen/khanhphan.jpg?dpi=150&quality=100&w=870"
                                    alt="Ảnh đại diện ICOJob"
                                    onerror="this.onerror=null;this.src='https://file3.qdnd.vn/data/images/0/2023/05/03/vuhuyen/khanhphan.jpg?dpi=150&quality=100&w=870';">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <h2 class="service-title">Đào tạo nghề – Nâng cao tay nghề, phát triển tương lai</h2>
                        <p class="service-subtitle">ICOJOB chú trọng đào tạo kỹ năng nghề thiết thực thông qua hệ thống
                            trường cao đẳng và trung tâm đào tạo thuộc ICOGroup. Các ngành nghề kỹ thuật được thiết kế phù
                            hợp với nhu cầu thực tế của doanh nghiệp, giúp học viên vừa học vừa làm – đảm bảo có việc ngay
                            sau tốt nghiệp.</p>
                        <h3 class="benefit">👉 Lợi ích nổi bật:</h3>
                        <ul class="list-benefit">
                            <li class="d-flex justify-content-start align-items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                    aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                    data-yw-s="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <span>Chương trình gắn liền với thực tế sản xuất</span>
                            </li>
                            <li class="d-flex justify-content-start align-items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                    aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                    data-yw-s="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <span>Giảng viên có kinh nghiệm doanh nghiệp</span>
                            </li>
                            <li class="d-flex justify-content-start align-items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                    aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                    data-yw-s="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <span>Cam kết giới thiệu việc làm sau đào tạo</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding" style="background-color: #080808">
            <div class="container container-xxl">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6">
                        <h2 class="service-title">Đào tạo ngoại ngữ – Bước đệm hội nhập và thăng tiến</h2>
                        <p class="service-subtitle text-white">Bên cạnh tay nghề, ngôn ngữ là chìa khóa mở ra nhiều cơ hội việc làm mới cho người lao động Việt Nam. ICOJOB triển khai chương trình đào tạo tiếng Trung thực chiến, được thiết kế dựa trên nhu cầu thực tế của doanh nghiệp FDI – đặc biệt là các tập đoàn lớn từ Trung Quốc, Đài Loan.</p>
                        <h3 class="benefit text-white">👉 Lợi ích nổi bật:</h3>
                        <ul class="list-benefit text-white">
                            <li class="d-flex justify-content-start align-items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                    aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                    data-yw-s="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <span>Đội ngũ giáo viên giàu kinh nghiệm, chuyên môn cao</span>
                            </li>
                            <li class="d-flex justify-content-start align-items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                    aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                    data-yw-s="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <span>Giáo trình độc quyền, thực tế và dễ hiểu</span>
                            </li>
                            <li class="d-flex justify-content-start align-items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                    aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                    data-yw-s="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <span>Lộ trình học rõ ràng, kiểm tra năng lực định kỳ</span>
                            </li>
                            <li class="d-flex justify-content-start align-items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                    aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                    data-yw-s="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <span>Quy trình giảng dạy sinh động, tương tác cao</span>
                            </li>
                            <li class="d-flex justify-content-start align-items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check w-5 h-5 text-icojob-primary flex-shrink-0"
                                    aria-hidden="true" data-yw="c3JjL2NvbXBvbmVudHMvU2VydmljZVNlY3Rpb24udHN4QDcxOjE4"
                                    data-yw-s="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <span>Sĩ số lớp nhỏ (12–15 học viên), được kèm cặp sát sao</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <!-- Thẻ Hình Ảnh chính -->
                        <a href="#" class="d-block text-decoration-none card-zoom-container-service card-zoom-container-service-custom-height">

                            <!-- Vùng chứa hình ảnh -->
                            <div class="card-img-wrapper-service">
                                <img class="card-img-custom-service"
                                    src="https://file3.qdnd.vn/data/images/0/2023/05/03/vuhuyen/khanhphan.jpg?dpi=150&quality=100&w=870"
                                    alt="Ảnh đại diện ICOJob"
                                    onerror="this.onerror=null;this.src='https://file3.qdnd.vn/data/images/0/2023/05/03/vuhuyen/khanhphan.jpg?dpi=150&quality=100&w=870';">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding" style="background-color: #ffc300">
            <div class="container container-xxl cta-custom">
                <h2>ICOJOB – Đồng hành cùng người lao động, vì một tương lai bền vững</h2>
                <p>Với triết lý "Kết nối – Đào tạo – Phát triển", ICOJOB không chỉ cung cấp nguồn nhân lực chất lượng cho doanh nghiệp, mà còn trao cơ hội đổi đời cho hàng ngàn người lao động Việt Nam.</p>
                <button class="btn btn-dark">Liên hệ ngay</button>
            </div>
        </section>
    </div>
@endsection