<?php
  use App\Helpers\RouteHelper;
?>
<aside class="app-sidebar sticky" id="sidebar">
  <div class="main-sidebar-header">
		<a href="{{ route('dashboard') }}" class="header-logo">
			<img src="{{ asset('assets/images/brand-logos/logo-ligal.png') }}" alt="logo" class="desktop-logo">
			<img src="{{ asset('assets/images/brand-logos/logo-ligal-sm.png') }}" alt="logo" class="toggle-dark">
			<img src="{{ asset('assets/images/brand-logos/logo-ligal.png') }}" alt="logo" class="desktop-dark">
			<img src="{{ asset('assets/images/brand-logos/logo-ligal-sm.png') }}" alt="logo" class="toggle-logo">
		</a>
  </div>
  <div class="main-sidebar" id="sidebar-scroll">
    <nav class="main-menu-container nav nav-pills flex-column sub-open">
      <div class="slide-left" id="slide-left">
        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
      </div>
      <ul class="main-menu">

        <li class="slide__category">
          <span class="category-name">Dashboards</span>
        </li>
        <li class="slide">
          <a href="{{ route('dashboard') }}" class="side-menu__item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard side-menu__icon"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" /><path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" /><path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" /><path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" /></svg>
            <span class="side-menu__label">Dashboard</span>
          </a>
        </li>

        <li class="slide__category">
          <span class="category-name">App Features</span>
        </li>

        <li class="slide has-sub {{ request()->routeIs(RouteHelper::getEcommerceRouteLists()) ? 'open' : '' }}">
            <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getEcommerceRouteLists()) ? 'active' : '' }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart side-menu__icon">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M17 17h-11v-14h-2" />
                <path d="M6 5l14 1l-1 7h-13" />
              </svg>
              <span class="side-menu__label">E-Commerce</span>
              <i class="ri-arrow-right-s-line side-menu__angle"></i>
            </a>
            <ul class="slide-menu child1" style="{{ request()->routeIs(RouteHelper::getEcommerceRouteLists()) ? 'display:block' : '' }}">
                <li class="slide side-menu__label1">
                    <a href="javascript:void(0)">E-Commerce</a>
                </li>
                <li class="slide">
                    <a href="{{ route('ecommerce') }}" class="side-menu__item {{ request()->routeIs('ecommerce') ? 'active' : '' }}">Main Menu</a>
                </li>
                <li class="slide">
                    <a href="{{ route('products') }}" class="side-menu__item {{ request()->routeIs(RouteHelper::getProductRouteLists()) ? 'active' : '' }}">Products</a>
                </li>
                <li class="slide">
                    <a href="{{ route('wishlist') }}" class="side-menu__item {{ request()->routeIs('wishlist') ? 'active' : '' }}">Wishlist</a>
                </li>
            </ul>
        </li>
        <li class="slide has-sub {{ request()->routeIs(RouteHelper::getUsersRouteLists()) ? 'open' : '' }}">
            <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getUsersRouteLists()) ? 'active' : '' }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round  stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user side-menu__icon">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
              </svg>
              <span class="side-menu__label">User</span>
              <i class="ri-arrow-right-s-line side-menu__angle"></i>
            </a>
            <ul class="slide-menu child1" style="{{ request()->routeIs(RouteHelper::getUsersRouteLists()) ? 'display:block' : '' }}">
                <li class="slide side-menu__label1">
                    <a href="javascript:void(0)">User</a>
                </li>
                <li class="slide">
                    <a href="{{ route('profile') }}" class="side-menu__item {{ request()->routeIs('profile') ? 'active' : '' }}">Profile</a>
                </li>
                <li class="slide">
                  <a href="{{ route('mail') }}" class="side-menu__item {{ request()->routeIs('mail') ? 'active' : '' }}">Mail</a>
                </li>
                <li class="slide">
                    <a href="{{ route('task-manager') }}" class="side-menu__item {{ request()->routeIs('task-manager') ? 'active' : '' }}">Task Manager</a>
                </li>
                <li class="slide">
                    <a href="{{ route('user-settings') }}" class="side-menu__item {{ request()->routeIs('user-settings') ? 'active' : '' }}">Settings</a>
                </li>
                <li class="slide">
                    <a href="{{ route('user-support') }}" class="side-menu__item {{ request()->routeIs('user-support') ? 'active' : '' }}">Support</a>
                </li>
            </ul>
        </li>
        <li class="slide has-sub {{ request()->routeIs(RouteHelper::getOfficeRouteLists()) ? 'open' : '' }}">
            <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getOfficeRouteLists()) ? 'active' : '' }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building side-menu__icon">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 21l18 0" />
                <path d="M9 8l1 0" />
                <path d="M9 12l1 0" />
                <path d="M9 16l1 0" />
                <path d="M14 8l1 0" />
                <path d="M14 12l1 0" />
                <path d="M14 16l1 0" />
                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
              </svg>
              <span class="side-menu__label">Office</span>
              <i class="ri-arrow-right-s-line side-menu__angle"></i>
            </a>
            <ul class="slide-menu child1" style="{{ request()->routeIs(RouteHelper::getOfficeRouteLists()) ? 'display:block' : '' }}">
                <li class="slide side-menu__label1">
                    <a href="javascript:void(0)">Office</a>
                </li>
                <li class="slide">
                    <a href="{{ route('employee') }}" class="side-menu__item {{ request()->routeIs('employee') ? 'active' : '' }}">Employee</a>
                    {{-- <a href="{{ route('profile') }}" class="side-menu__item {{ request()->routeIs('profile') ? 'active' : '' }}">Employee</a> --}}
                </li>

            </ul>
        </li>
        <!-- End::slide -->
        {{-- batas --}}
        
      </ul>
      <div class="slide-right" id="slide-right">
        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> 
          <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> 
        </svg>
      </div>
    </nav>
  </div>
</aside>