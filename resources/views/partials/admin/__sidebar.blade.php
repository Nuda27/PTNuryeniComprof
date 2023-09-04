<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/admin/dashboard" class="app-brand-link">
            <img src="{{ asset('logo/nyn.png') }}" alt="nyn" class="app-brand-logo demo" width="75">
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
        <!-- Cards -->
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Slider</div>
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
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Alerts">Alerts</div>
                    </a>
                </li>
            </ul>
        </li>


    </ul>
</aside>
