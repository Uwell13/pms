    <!-- Menu -->
    <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
        <div class="container-xxl d-flex h-100">
            <ul class="menu-inner">
                <!-- Dashboards -->
                <li class="menu-item {{ Request::is('/','home') ? 'active' : '' }}">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-smart-home"></i>
                        <div data-i18n="Dashboards">Dashboards</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::is('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}" class="menu-link">
                                <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
                                <div data-i18n="Analytics">Analytics</div>
                            </a>
                        </li>
                    </ul>
                </li>
            <!-- Inventory -->
            @can('Inventory-List')
            <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
                <a href="/" class="menu-link menu-toggle">
                  <i class='menu-icon tf-icons ti ti-packages'></i>
                  <div data-i18n="Inventory">Inventory</div>
                </a> 
                @can('Exiting-Data-List')  
                <ul class="menu-sub">
                  <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="menu-link menu-link">
                      <i class="menu-icon tf-icons ti ti-file-export"></i>
                      <div data-i18n="Exiting Data">Exiting Data</div>
                    </a>
                  </li>
                  @endcan
              @can('Inventory-Stock-List')    
              <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ route('roles.index') }}" class="menu-link menu-link">
                  <i class="menu-icon tf-icons ti ti-package"></i>
                  <div data-i18n="Inventory Stock">Inventory Stock</div>
                </a>                
              </li>
              @endcan
              @can('Transaction-In')    
              <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ route('roles.index') }}" class="menu-link menu-link">
                  <i class="menu-icon tf-icons ti ti-file-arrow-left"></i>
                  <div data-i18n="Transaction In">Transaction In</div>
                </a>                
              </li>
              @endcan
              @can('Transaction-Out-List')    
              <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ route('roles.index') }}" class="menu-link menu-link">
                  <i class="menu-icon tf-icons ti ti-file-arrow-right"></i>
                  <div data-i18n="Transaction Out">Transaction Out</div>
                </a>                
              </li>
              @endcan
              @can('Report-Inventory-List')    
              <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ route('roles.index') }}" class="menu-link menu-link">
                  <i class="menu-icon tf-icons ti ti-report"></i>
                  <div data-i18n="Report Inventory">Report Inventory</div>
                </a>                
              </li>
              @endcan
            </ul>
          </li>
          @endcan
            <!-- Users -->
            @can('Users-List')
            <li class="menu-item {{ Request::is('roles','users') ? 'active' : '' }}">
                <a href="/" class="menu-link menu-toggle">
                  <i class='menu-icon tf-icons ti ti-users'></i>
                  <div data-i18n="Users">Users</div>
                </a> 
            <ul class="menu-sub">
              <li class="menu-item {{ Request::is('users') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="menu-link menu-link">
                  <i class="menu-icon tf-icons ti ti-users"></i>
                  <div data-i18n="Users">Users</div>
                </a>
              </li>
              @can('Role-List')    
              <li class="menu-item {{ Request::is('roles') ? 'active' : '' }}">
                <a href="{{ route('roles.index') }}" class="menu-link menu-link">
                  <i class="menu-icon tf-icons ti ti-settings"></i>
                  <div data-i18n="Roles">Roles</div>
                </a>                
              </li>
              @endcan
            </ul>
          </li>
          @endcan
        </ul>
      </div>
    </aside>
    <!-- / Menu -->
    