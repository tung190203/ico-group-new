<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold ms-2">Ico Group</span>
        </a>
    </div>

    <div class="menu-divider mt-0"></div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active open' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate">Tổng quan</div>
            </a>
        </li>
        
        <li class="menu-item {{ request()->routeIs('admin.category*') ? 'active open' : '' }}">
            <a href="{{ route('admin.category.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div class="text-truncate">Quản lý danh mục</div>
            </a>
        </li>        
        <li class="menu-item {{ request()->routeIs('admin.partner*') ? 'active open' : '' }}">
            <a href="{{ route('admin.partner.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-plus"></i>
                <div class="text-truncate">Quản lý đối tác</div>
            </a>
        </li> 
        <li class="menu-item {{ request()->routeIs('admin.post*') ? 'active open' : '' }}">
            <a href="{{ route('admin.post.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div class="text-truncate">Quản lý bài viết</div>
            </a>
        </li>  
        <li class="menu-item {{ request()->routeIs('admin.menu*') ? 'active open' : '' }}">
            <a href="{{ route('admin.menu.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-menu"></i>
                <div class="text-truncate">Quản lý menu</div>
            </a>
        </li>        
    </ul>
</aside>