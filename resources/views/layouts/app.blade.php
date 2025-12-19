<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'ICOJob - Human Resources')</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />

    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" /> --}}
    @stack('styles')
  </head>

  <body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')
        <!-- Floating Action Buttons -->
        <div class="floating-buttons">
          <!-- Nút gọi -->
          <div class="fab-item" id="call-btn" data-bs-toggle="tooltip" data-bs-placement="left"
              title="Gọi cho chúng tôi">
              <i class="bi bi-telephone-fill"></i>
              <div class="hotline-list" id="hotline-list">
                  <div class="hotline-item">
                      <a href="tel:+84838214222" class="d-flex align-items-center text-decoration-none text-dark">
                          <i class="bi bi-telephone"></i>
                          <div class="ms-2">
                              <div class="hotline-name">Hotline 1</div>
                              <div class="hotline-number text-primary">+84 83 821 4222</div>
                          </div>
                      </a>
                  </div>
                  <div class="hotline-item">
                      <a href="tel:+84901234567" class="d-flex align-items-center text-decoration-none text-dark">
                          <i class="bi bi-telephone"></i>
                          <div class="ms-2">
                              <div class="hotline-name">Hotline 2</div>
                              <div class="hotline-number text-primary">+84 33 654 4366</div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
  
          <!-- Nút tin nhắn -->
          <div class="fab-item" id="message-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Tin nhắn">
              <i class="bi bi-chat-dots-fill"></i>
              <div class="hotline-list" id="message-list">
                  <div class="hotline-item">
                      <a href="https://zalo.me/838214222" target="_blank"
                          class="d-flex align-items-center text-decoration-none text-dark">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Icon_of_Zalo.svg"
                              style="width: 35px" alt="Zalo" />
                          <div class="ms-2">
                              <div class="hotline-name">Chat với chúng tôi trên Zalo</div>
                          </div>
                      </a>
                  </div>
  
                  <div class="hotline-item">
                      <a href="https://www.facebook.com/profile.php?id=61581086139050" target="_blank"
                          class="d-flex align-items-center text-decoration-none text-dark">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Facebook_Messenger_logo_2020.svg"
                              style="width: 35px" alt="Messenger" />
                          <div class="ms-2">
                              <div class="hotline-name">
                                  Chat với chúng tôi trên Messenger
                              </div>
                          </div>
                      </a>
                  </div>
  
                  <div class="hotline-item">
                      <a href="mailto:icojob.mkt@gmail.com"
                          class="d-flex align-items-center text-decoration-none text-dark">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Gmail_icon_(2020).svg"
                              alt="Email" style="width: 35px" />
                          <div class="ms-2">
                              <div class="hotline-name">Gửi email</div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
  
          <!-- Nút lên đầu trang -->
          <div class="fab-item" id="scroll-top" data-bs-toggle="tooltip" data-bs-placement="left" title="Lên đầu trang">
              <i class="bi bi-arrow-up-short" style="font-size: 40px"></i>
          </div>
      </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
    @stack('scripts')
  </body>
</html>
