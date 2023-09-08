<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/admin/dashboard" class="app-brand-link">
            <img src="{{ $profile->logo ? asset($profile->logo) : asset('logo/nyn.png') }}" alt="nyn"
                class="app-brand-logo demo" width="75">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Nuryeni</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }} ">
            <a href="/admin/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Content</span></li>

        {{-- Carousel --}}
        <li class="menu-item {{ (request()->is('')) ? 'open active' : '' }}">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-image"></i>
                <div data-i18n="Basic">Carousel</div>
            </a>
        </li>

        {{-- About --}}
        <li class="menu-item {{ (request()->is('admin/about')) ? 'open active' : '' }}">
            <a href="/admin/about" class="menu-link">
                <i class="menu-icon tf-icons bx bx-conversation"></i>
                <div data-i18n="Basic">About</div>
            </a>
        </li>

        {{-- Why Choose --}}
        <li class="menu-item {{ (request()->is('admin/whychoose')) ? 'open active' : '' }}">
            <a href="/admin/whychoose" class="menu-link">
                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                <div data-i18n="Basic">Why Choose</div>
            </a>
        </li>

        {{-- service --}}
        <li class="menu-item {{ (request()->is('admin/services*')) ? 'open active' : '' }}">
            <a href="/admin/services" class="menu-link">
                <i class="menu-icon tf-icons bx bx-car"></i>
                <div data-i18n="Basic">Services</div>
            </a>
        </li>

        {{-- Project --}}
        <li class="menu-item {{ (request()->is('admin/project*')) ? 'open active' : '' }}">
            <a href="/admin/project" class="menu-link">
                <i class="menu-icon tf-icons bx bx-notepad"></i>
                <div data-i18n="Basic">Project</div>
            </a>
        </li>

        {{-- testimonial --}}
        <li class="menu-item {{ (request()->is('admin/testimonial')) ? 'open active' : '' }}">
            <a href="/admin/testimonial" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Basic">Testimonial</div>
            </a>
        </li>

        {{-- profile perusahaan --}}
        <li class="menu-item {{ (request()->is('admin/office-profile')) ? 'open active' : '' }}">
            <a href="/admin/office-profile" class="menu-link">
                <i class="menu-icon tf-icons bx bx-building"></i>
                <div data-i18n="Basic">Profile PT</div>
            </a>
        </li>

        <!-- contact -->
        <li class="menu-item {{ (request()->is('admin/contact*')) ? 'open active' : '' }}">
            <a href="/admin/contact" class="menu-link">
                <i class="menu-icon tf-icons bx bx-mail-send"></i>
                <div data-i18n="Basic">Contact Message</div>
            </a>
        </li>

        <!-- User interface -->
        <li class="menu-item {{ (request()->is('admin/user*')) ? 'open active' : '' }} ">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">Data Master</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ (request()->is('admin/user*')) ? 'active' : '' }} ">
                    <a href="/admin/user" class="menu-link ">
                        <div data-i18n="Accordion">Users</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
