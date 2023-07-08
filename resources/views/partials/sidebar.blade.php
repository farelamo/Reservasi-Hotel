<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('images/logo.png') }}" alt="" width="75">
            </span>
            {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Xiehokki</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        @if (auth()->user()->role == 'admin')
            <li class="menu-item">
                <a href="/admin/state" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-business"></i>
                    <div data-i18n="Analytics">State</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="/admin/receptionist" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Analytics">Receptionist</div>
                </a>
            </li>
        @endif

        @if (auth()->user()->role == 'receptionist')
            <li class="menu-item">
                <a href="/receptionist/investor" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-user-badge"></i>
                    <div data-i18n="Analytics">Investor</div>
                </a>
            </li>
        @endif
    </ul>
</aside>
