@extends('layouts.app')

@section('title', 'Giới thiệu')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
@endpush

@section('content')
    <div class="bg-white text-black h-full">
        <div class="container container-xxl py-4">
            <div class="d-inline-block position-relative text-center w-100 mb-4">
                <h1 class="position-relative introduce">Giới thiệu về ICOJOB</h1>
                <div class="position-absolute start-50 translate-middle-x line">
                </div>
                <p class="position-absolute start-50 translate-middle-x subtitle">Bộ khung vững chắc cho doanh nghiệp và
                    người lao động</p>
            </div>
            <section class="row gx-5 gy-3 justify-content-center align-items-center"
                style="margin-top: 100px;margin-bottom:100px">
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="item-card">
                            <strong>ICOJob là thành viên của Tập đoàn ICOGroup</strong> - một trong những tập đoàn hàng đầu
                            về cung ứng nhân lực quốc tế và du học với 15 năm kinh nghiệm. Năm 2018, đứng trước đòi hỏi về
                            nguồn lao động có trình độ với thái độ ổn định cho các công ty nước ngoài tại Việt Nam, đặc biệt
                            là các công ty Nhật Bản, Hàn Quốc ngày càng cao, ICOJob chính thức ra đời với sứ mệnh trở thành
                            cầu nối kết nối giữa người lao động Việt Nam và các doanh nghiệp nước ngoài.
                        </div>
                        <div class="item-card">
                            <ul class="list-unstyled mb-0">
                                <li><strong>Tên doanh nghiệp đầy đủ:</strong> Công ty Cổ phần Cung ứng Nguồn Nhân lực ICO
                                </li>
                                <li><strong>Thương hiệu:</strong> ICOJob</li>
                                <li><strong>Thành lập:</strong> 09/07/2018</li>
                                <li><strong>Lĩnh vực:</strong> Giới thiệu và cung ứng nhân lực cho các doanh nghiệp nước
                                    ngoài đang đầu tư tại Việt Nam (Doanh nghiệp FDI)</li>
                            </ul>
                        </div>
                        <div>
                            <strong>ICOJob đang cung cấp các dịch vụ chính bao gồm:</strong>
                            <ul style="padding-left: 1rem !important" class="mt-4">
                                <li class="mb-3">Cung ứng lao động phổ thông</li>
                                <li class="mb-3">Cung ứng lao động kỹ thuật</li>
                                <li class="mb-3">Đào tạo ngoại ngữ</li>
                                <li>Đào tạo nghề</li>
                            </ul>
                        </div>
                        <div class="light-box">
                            Mỗi năm, ICOJob giới thiệu từ <strong>10.000 - 15.000 lao động</strong> cho các công ty FDI trên
                            địa bàn <strong>Bắc Giang và Bắc Ninh</strong>, trong đó lao động có trình độ tay nghề là
                            <strong>300 - 400 lao động/năm.</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Thẻ Hình Ảnh chính -->
                    <a href="#" class="d-block text-decoration-none card-zoom-container">

                        <!-- Vùng chứa hình ảnh -->
                        <div class="card-img-wrapper">
                            <img class="card-img-custom"
                                src="https://file3.qdnd.vn/data/images/0/2023/05/03/vuhuyen/khanhphan.jpg?dpi=150&quality=100&w=870"
                                alt="Ảnh đại diện ICOJob"
                                onerror="this.onerror=null;this.src='https://file3.qdnd.vn/data/images/0/2023/05/03/vuhuyen/khanhphan.jpg?dpi=150&quality=100&w=870';">
                        </div>

                        <!-- Lớp phủ Gradient -->
                        <div class="card-img-overlay-custom"></div>

                        <!-- Nội dung Văn bản -->
                        <div class="card-content-text">
                            <p class="card-title-custom">ICOJob - Cung ứng Nguồn Nhân lực</p>
                            <p class="card-subtitle-custom">Cầu nối giữa người lao động Việt Nam và doanh nghiệp nước ngoài
                            </p>
                        </div>

                    </a>
                </div>
            </section>
            <div class="d-inline-block position-relative text-center w-100 mb-4">
                <h1 class="position-relative" style="font-size: 36px">Sự khác biệt của ICOJOB</h1>
                <div class="position-absolute start-50 translate-middle-x line">
                </div>
            </div>
            <div class="row gy-3 my-4">
                <div class="col-md-4 col-12 col-lg-4 d-flex">
                    <div class="m-1 p-4 rounded diffirent h-100">
                        <div class="p-2 rounded icon-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-users w-6 h-6" aria-hidden="true"
                                data-yw="c3JjL2NvbXBvbmVudHMvQWJvdXRTZWN0aW9uLnRzeEAxNzoxMA" data-yw-s="true">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h4>Chính sách đồng hành trọn vẹn</h4>
                        <p>Không chỉ giới thiệu việc làm, ICOJob còn hỗ trợ nhà ở, xe đưa đón, tạo cộng đồng cho người lao
                            động – giúp ổn định tâm lý và gắn bó lâu dài với doanh nghiệp.</p>
                        <div class="custom-line"></div>
                    </div>
                </div>
                <div class="col-md-4 col-12 col-lg-4 d-flex">
                    <div class="m-1 p-4 rounded diffirent h-100">
                        <div class="p-2 rounded icon-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-book-open w-6 h-6" aria-hidden="true"
                                data-yw="c3JjL2NvbXBvbmVudHMvQWJvdXRTZWN0aW9uLnRzeEAyNDoxMA" data-yw-s="true">
                                <path d="M12 7v14"></path>
                                <path
                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                </path>
                            </svg>
                        </div>
                        <h4>Kênh tuyển dụng đa dạng</h4>
                        <p>Kết hợp hệ thống tuyển dụng online và offline phủ khắp 30 tỉnh thành thông qua các chi nhánh của
                            ICOGroup.</p>
                        <div class="custom-line"></div>
                    </div>
                </div>
                <div class="col-md-4 col-12 col-lg-4 d-flex">
                    <div class="m-1 p-4 rounded diffirent h-100">
                        <div class="p-2 rounded icon-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-zap w-6 h-6" aria-hidden="true"
                                data-yw="c3JjL2NvbXBvbmVudHMvQWJvdXRTZWN0aW9uLnRzeEAzMToxMA" data-yw-s="true">
                                <path
                                    d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                </path>
                            </svg>
                        </div>
                        <h4>Hệ sinh thái Tập đoàn ICOGroup</h4>
                        <p>Khai thác thế mạnh của hệ thống đào tạo, du học, xuất khẩu lao động với dữ liệu nhân lực khổng lồ
                            trên toàn quốc.</p>
                        <div class="custom-line"></div>
                    </div>
                </div>
                <div class="col-md-4 col-12 col-lg-4 d-flex">
                    <div class="m-1 p-4 rounded diffirent h-100">
                        <div class="p-2 rounded icon-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-briefcase w-6 h-6" aria-hidden="true"
                                data-yw="c3JjL2NvbXBvbmVudHMvQWJvdXRTZWN0aW9uLnRzeEAzNzoxMA" data-yw-s="true">
                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                            </svg>
                        </div>
                        <h4>Cung cấp ứng viên nhiều hơn nhu cầu doanh nghiệp</h4>
                        <p>Doanh nghiệp dễ dàng lựa chọn ứng viên phù hợp nhất.</p>
                        <div class="custom-line"></div>
                    </div>
                </div>
                <div class="col-md-4 col-12 col-lg-4 d-flex">
                    <div class="m-1 p-4 rounded diffirent h-100">
                        <div class="p-2 rounded icon-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-circle-check-big w-6 h-6" aria-hidden="true"
                                data-yw="c3JjL2NvbXBvbmVudHMvQWJvdXRTZWN0aW9uLnRzeEA0NDoxMA" data-yw-s="true">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                        </div>
                        <h4>Đào tạo trước phỏng vấn</h4>
                        <p>Ứng viên được sàng lọc và đào tạo trước khi phỏng vấn để giảm tỉ lệ nghỉ việc giữa chừng.</p>
                        <div class="custom-line"></div>
                    </div>
                </div>
                <div class="col-md-4 col-12 col-lg-4 d-flex">
                    <div class="m-1 p-4 rounded diffirent h-100">
                        <div class="p-2 rounded icon-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-building2 lucide-building-2 w-6 h-6" aria-hidden="true"
                                data-yw="c3JjL2NvbXBvbmVudHMvQWJvdXRTZWN0aW9uLnRzeEA1MToxMA" data-yw-s="true">
                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                <path d="M10 6h4"></path>
                                <path d="M10 10h4"></path>
                                <path d="M10 14h4"></path>
                                <path d="M10 18h4"></path>
                            </svg>
                        </div>
                        <h4>Tiến độ chuẩn & Cơ sở vật chất hiện đại</h4>
                        <p>Đảm bảo đúng thời gian tuyển dụng. ICOJob có ký túc xá 500 chỗ ở, xe đưa đón, cơ sở vật chất hiện
                            đại, an toàn.</p>
                        <div class="custom-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection