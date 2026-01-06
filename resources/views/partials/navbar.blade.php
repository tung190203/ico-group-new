<nav class="navbar navbar-expand-lg sticky-top" id="mainNav">
    <div class="container container-xxl">
      <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
        <div class="d-flex flex-column lh-1">
          <img
            src="{{ asset('assets/images/logo.png') }}"
            alt="ICOJob Logo"
            class="mb-2"
            style="height: 60px"
          />
        </div>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars text-warning"></i>
      </button>
      <div
        class="collapse navbar-collapse justify-content-end ms-4"
        id="navbarNav"
      >
        <ul class="navbar-nav align-items-lg-center">
          @foreach ($menus as $menu)
          <li class="nav-item">
            <a class="nav-link" href="{{ url($menu->link) }}">{{ $menu->name }}</a>
          </li>
          @endforeach
          <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
            <a href="#lien-he" class="btn btn-yellow-nav">Đăng ký tư vấn</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>