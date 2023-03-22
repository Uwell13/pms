    <!-- Menu -->
    <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
        <div class="container-xxl d-flex h-100">
            <ul class="menu-inner">
                <!-- Dashboards -->
                <li class="menu-item {{ Request::is('/', 'home') ? 'active' : '' }}">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-smart-home"></i>
                        <div data-i18n="Dashboards">Dashboards</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
                            <a href="/" class="menu-link">
                                <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
                                <div data-i18n="Analytics">Analytics</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::is('change/ship') ? 'active' : '' }}">
                            <a href="/change/ship" class="menu-link">
                                <i class="menu-icon tf-icons ti ti-ship"></i>
                                <div data-i18n="Change Ship">Change Ship</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Apps -->
                <li class="menu-item {{ Request::is('roles', 'users') ? 'active' : '' }}">
                    <a href="/" class="menu-link menu-toggle">
                        <i class='menu-icon tf-icons ti ti-layout-grid-add'></i>
                        <div data-i18n="Apps">Apps</div>
                    </a>
                    <ul class="menu-sub">
                        @can('product-list')
                            <li class="menu-item {{ Request::is('products') ? 'active' : '' }}">
                                <a href="{{ route('products.index') }}" class="menu-link">
                                    <i class="menu-icon tf-icons ti ti-box"></i>
                                    <div data-i18n="Product">Products</div>
                                </a>
                            </li>
                        @endcan
                        @can('users-list')
                            <li class="menu-item {{ Request::is('users') ? 'active' : '' }}">
                                <a href="{{ route('users.index') }}" class="menu-link menu-link">
                                    <i class="menu-icon tf-icons ti ti-users"></i>
                                    <div data-i18n="Users">Users</div>
                                </a>
                            </li>
                        @endcan
                        @can('role-list')
                            <li class="menu-item {{ Request::is('roles') ? 'active' : '' }}">
                                <a href="{{ route('roles.index') }}" class="menu-link menu-link">
                                    <i class="menu-icon tf-icons ti ti-settings"></i>
                                    <div data-i18n="Roles">Roles</div>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
    <!-- / Menu -->
