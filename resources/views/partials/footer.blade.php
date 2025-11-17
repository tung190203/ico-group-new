<footer>
    <div class="container container-xxl">
      <div class="row pb-5">
        <div class="col-lg-5 col-md-12" style="font-size: 14px">
          <a
            href="#trang-chu"
            class="d-flex align-items-center mb-3 text-decoration-none"
          >
            <div class="d-flex flex-column lh-1">
              <img
                src="assets/images/logo.png"
                alt="ICOJob Logo"
                class="mb-2"
                style="height: 70px"
              />
              <span
                class="footer-logo-sub mt-2"
                style="font-size: 12px !important"
                >HUMAN RESOURCES</span
              >
            </div>
          </a>
          <p class="footer-about mt-4">
            CÔNG TY CỔ PHẦN CUNG ỨNG NGUỒN NHÂN LỰC ICO – giải pháp nhân lực
            chất lượng cao cho doanh nghiệp FDI tại Việt Nam.
          </p>
          <p class="footer-about">Địa chỉ: Vân Cốc 2, Nếnh, Bắc Ninh</p>
          <p class="footer-about">
            Hotline:
            <a
              href="tel:+84838214222"
              class="text-warning text-decoration-none fw-bold"
            >
              +84 83 821 4222
            </a>
          </p>

          <p class="footer-about">
            Email:
            <a
              href="mailto:icojob2018@gmail.com"
              class="text-warning text-decoration-none fw-bold"
            >
              icojob2018@gmail.com
            </a>
          </p>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="footer-links">
            <h6 class="text-warning">Điều hướng</h6>
            <p><a href="{{ route('home') }}">Trang chủ</a></p>
            <p><a href="#gioi-thieu">Giới thiệu</a></p>
            <p><a href="#dich-vu">Dịch vụ</a></p>
            <p><a href="#doi-tac-fdi">Đối tác FDI</a></p>
            <p><a href="#tin-tuc">Tin tức</a></p>
            <p><a href="{{ route('recruitment') }}">Tuyển dụng</a></p>
            <p><a href="{{ route('contact') }}">Liên hệ</a></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="footer-links">
            <h6 class="text-warning">Kết nối</h6>
            <p><a href="#">Facebook</a></p>
            <p><a href="#">Zalo</a></p>
            <p><a href="#">TikTok</a></p>
            <p><a href="#">YouTube</a></p>
          </div>
        </div>
      </div>

      <div class="footer-copyright text-center">
        © 2025 ICOJob – All rights reserved.
      </div>
    </div>
  </footer>
      <!-- Floating Action Buttons -->
      <div class="floating-buttons">
        <!-- Nút gọi -->
        <div
          class="fab-item"
          id="call-btn"
          data-bs-toggle="tooltip"
          data-bs-placement="left"
          title="Gọi cho chúng tôi"
        >
          <i class="bi bi-telephone-fill"></i>
          <div class="hotline-list" id="hotline-list">
            <div class="hotline-item">
              <a
                href="tel:+84838214222"
                class="d-flex align-items-center text-decoration-none text-dark"
              >
                <i class="bi bi-telephone"></i>
                <div class="ms-2">
                  <div class="hotline-name">Hotline 1</div>
                  <div class="hotline-number text-primary">+84 83 821 4222</div>
                </div>
              </a>
            </div>
            <div class="hotline-item">
              <a
                href="tel:+84901234567"
                class="d-flex align-items-center text-decoration-none text-dark"
              >
                <i class="bi bi-telephone"></i>
                <div class="ms-2">
                  <div class="hotline-name">Hotline 2</div>
                  <div class="hotline-number text-primary">+84 90 123 4567</div>
                </div>
              </a>
            </div>
          </div>
        </div>
  
        <!-- Nút tin nhắn -->
        <div
          class="fab-item"
          id="message-btn"
          data-bs-toggle="tooltip"
          data-bs-placement="left"
          title="Tin nhắn"
        >
          <i class="bi bi-chat-dots-fill"></i>
          <div class="hotline-list" id="message-list">
            <div class="hotline-item">
              <a
                href="https://zalo.me/838214222"
                target="_blank"
                class="d-flex align-items-center text-decoration-none text-dark"
              >
                <img
                  src="https://upload.wikimedia.org/wikipedia/commons/9/91/Icon_of_Zalo.svg"
                  style="width: 35px"
                  alt="Zalo"
                />
                <div class="ms-2">
                  <div class="hotline-name">Chat với chúng tôi trên Zalo</div>
                </div>
              </a>
            </div>
  
            <div class="hotline-item">
              <a
                href="https://m.me/yourpageid"
                target="_blank"
                class="d-flex align-items-center text-decoration-none text-dark"
              >
                <img
                  src="https://upload.wikimedia.org/wikipedia/commons/b/be/Facebook_Messenger_logo_2020.svg"
                  style="width: 35px"
                  alt="Messenger"
                />
                <div class="ms-2">
                  <div class="hotline-name">
                    Chat với chúng tôi trên Messenger
                  </div>
                </div>
              </a>
            </div>
  
            <div class="hotline-item">
              <a
                href="mailto:icojob2018@gmail.com"
                class="d-flex align-items-center text-decoration-none text-dark"
              >
                <img
                  src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Gmail_icon_(2020).svg"
                  alt="Email"
                  style="width: 35px"
                />
                <div class="ms-2">
                  <div class="hotline-name">Gửi email</div>
                </div>
              </a>
            </div>
          </div>
        </div>
  
        <!-- Nút lên đầu trang -->
        <div
          class="fab-item"
          id="scroll-top"
          data-bs-toggle="tooltip"
          data-bs-placement="left"
          title="Lên đầu trang"
        >
          <i class="bi bi-arrow-up-short" style="font-size: 40px"></i>
        </div>
      </div>