<header class="app-header sticky" id="header">
  <div class="main-header-container container-fluid">
    <div class="header-content-left">
      <div class="header-element">
        <div class="horizontal-logo">
          {{-- <a href="index.html" class="header-logo">
            <img src="{{ asset('') }}assets/images/brand-logos/logo-ligal-sm.png" alt="logo" class="desktop-logo">
            <img src="{{ asset('') }}assets/images/brand-logos/logo-ligal-sm.png" alt="logo" class="toggle-logo">
            <img src="{{ asset('') }}assets/images/brand-logos/logo-ligal-sm.png" alt="logo" class="desktop-dark">
            <img src="{{ asset('') }}assets/images/brand-logos/logo-ligal-sm.png" alt="logo" class="toggle-dark">
          </a> --}}
        </div>
      </div>
      <div class="header-element">
        <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link" data-bs-toggle="sidebar"
          href="javascript:void(0);">
          <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon menu-btn" width="32" height="32"
            fill="#000000" viewBox="0 0 256 256">
            <path
              d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
            </path>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon menu-btn-close" width="32"
            height="32" fill="#000000" viewBox="0 0 256 256">
            <path
              d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z">
            </path>
          </svg>
        </a>
      </div>
    </div>
    <ul class="header-content-right">
      <li class="header-element d-md-none d-block">
        <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
          data-bs-target="#header-responsive-search">
          <i class="bi bi-search header-link-icon"></i>
        </a>
      </li>
      <li class="header-element search-dropdown dropdown d-md-block d-none">
          <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
            data-bs-toggle="dropdown">
            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" width="32" height="32"
              fill="#000000" viewBox="0 0 256 256">
              <path
                d="M228.24,219.76l-51.38-51.38a86.15,86.15,0,1,0-8.48,8.48l51.38,51.38a6,6,0,0,0,8.48-8.48ZM38,112a74,74,0,1,1,74,74A74.09,74.09,0,0,1,38,112Z">
              </path>
            </svg>
          </a>
          <ul class="main-header-dropdown dropdown-menu dropdown-menu-end overflow-visible"
              data-popper-placement="none">
              <li class="px-3 py-2">
                  <div class="header-element header-search d-md-block d-none my-auto">
                      <input type="text" class="header-search-bar form-control" id="header-search"
                          placeholder="Search for Results..." spellcheck=false autocomplete="off"
                          autocapitalize="off">
                      <a href="javascript:void(0);" class="header-search-icon border-0">
                          <i class="bi bi-search"></i>
                      </a>
                  </div>
              </li>
          </ul>
      </li>
      <li class="header-element country-selector dropdown">
        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
          data-bs-toggle="dropdown">
          <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 256 256">
            <rect width="256" height="256" fill="none" />
            <polyline points="240 216 184 104 128 216" fill="none" stroke="currentColor"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
            <line x1="144" y1="184" x2="224" y2="184" fill="none" stroke="currentColor"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
            <line x1="96" y1="32" x2="96" y2="56" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16" />
            <line x1="32" y1="56" x2="160" y2="56" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16" />
            <path d="M128,56a96,96,0,0,1-96,96" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16" />
            <path d="M69.47,88A96,96,0,0,0,160,152" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16" />
          </svg>
        </a>
        <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
          <li>
            <div class="py-2 px-3">
              <input class="form-control form-control-sm" type="text" placeholder="Search Here"
                aria-label=".form-control-sm example">
            </div>
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center justify-content-between"
              href="javascript:void(0);">
              <div class="d-flex align-items-center">
                <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                  <img src="{{ asset('assets/images/flags/us_flag.png') }}" alt="img">
                </span>
                English
              </div>
              <span class="text-muted fs-12">(US)</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center justify-content-between"
              href="javascript:void(0);">
              <div class="d-flex align-items-center">
                <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                  <img src="{{ asset('assets/images/flags/uk_flag.png') }}" alt="img">
                </span>
                English
              </div>
              <span class="text-muted fs-12">(UK)</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center justify-content-between"
              href="javascript:void(0);">
              <div class="d-flex align-items-center">
                <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                  <img src="{{ asset('assets/images/flags/id_flag.png') }}" alt="img">
                </span>
                Indonesia
              </div>
              <span class="text-muted fs-12">(ID)</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="header-element header-theme-mode">
        <a href="javascript:void(0);" class="header-link layout-setting">
          <span class="light-layout">
            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 256 256">
              <rect width="256" height="256" fill="none" />
              <path d="M108.11,28.11A96.09,96.09,0,0,0,227.89,147.89,96,96,0,1,1,108.11,28.11Z"
                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="16" />
            </svg>
          </span>
          <span class="dark-layout">
            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 256 256">
              <rect width="256" height="256" fill="none" />
              <line x1="128" y1="40" x2="128" y2="32" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
              <circle cx="128" cy="128" r="56" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="16" />
              <line x1="64" y1="64" x2="56" y2="56" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
              <line x1="64" y1="192" x2="56" y2="200" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
              <line x1="192" y1="64" x2="200" y2="56" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
              <line x1="192" y1="192" x2="200" y2="200" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
              <line x1="40" y1="128" x2="32" y2="128" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
              <line x1="128" y1="216" x2="128" y2="224" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
              <line x1="216" y1="128" x2="224" y2="128" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
            </svg>
          </span>
        </a>
      </li>
      <li class="header-element header-fullscreen">
        <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
          <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-open header-link-icon"
            viewBox="0 0 256 256">
            <rect width="256" height="256" fill="none" />
            <polyline points="168 48 208 48 208 88" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16" />
            <polyline points="88 208 48 208 48 168" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16" />
            <polyline points="208 168 208 208 168 208" fill="none" stroke="currentColor"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
            <polyline points="48 88 48 48 88 48" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-close header-link-icon d-none"
            viewBox="0 0 256 256">
            <rect width="256" height="256" fill="none" />
            <polyline points="160 48 208 48 208 96" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16" />
            <line x1="144" y1="112" x2="208" y2="48" fill="none" stroke="currentColor"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
            <polyline points="96 208 48 208 48 160" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16" />
            <line x1="112" y1="144" x2="48" y2="208" fill="none" stroke="currentColor"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
          </svg>
        </a>
      </li>
      <li class="header-element dropdown">
          <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <div class="d-flex align-items-center">
              <div class="me-xl-2 me-0">
                @if(auth()->user())
                @php
                $userPhoto = auth()->user()->load('userDetails')->userDetails->profile_photo;
                @endphp
                <img src="{{ asset('storage/').'/user/'.$userPhoto }}" alt="img" class="avatar avatar-sm avatar-rounded">
                @else
                <img src="{{ asset('assets/images/faces/guest.jpg') }}" alt="img" class="avatar avatar-sm avatar-rounded">
                @endif
              </div>
              <div class="d-xl-block d-none lh-1">
                @if(auth()->user())
                <span class="fw-medium lh-1">{{ auth()->user()->name }}</span>
                @else
                <span class="fw-medium lh-1">Visitor</span>
                @endif
              </div>
            </div>
          </a>
          <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
            aria-labelledby="mainHeaderProfile">
            <li>
              @if(auth()->user())
              <div class="py-2 px-3 text-center"> 
                <span class="fw-semibold"> {{ auth()->user()->name }} </span> 
                <span class="d-block fs-12 text-muted">{{ auth()->user()->user_job }}</span> 
              </div>
              @else
              <div class="py-2 px-3 text-center"> 
                <span class="fw-semibold"> Visitor </span> 
                <span class="d-block fs-12 text-muted">Valuable Customer</span> 
              </div>
              @endif
            </li>
            <li><a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}"><i
                        class="ti ti-user text-primary me-2 fs-16"></i>Profile</a>
            </li>
            <li><a class="dropdown-item d-flex align-items-center" href="mail.html"> <i
                        class="ti ti-mail text-secondary me-2 fs-16"></i>Inbox</a>
            </li>
            <li><a class="dropdown-item d-flex align-items-center" href="to-do-list.html"><i
                        class="ti ti-checklist text-success me-2 fs-16"></i>Task
                    Manager</a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="mail-settings.html"><i
                        class="ti ti-settings text-info me-2 fs-16"></i>Settings</a>
            </li>
            <li><a class="dropdown-item d-flex align-items-center" href="chat.html"><i
                        class="ti ti-headset text-warning me-2 fs-16"></i>Support</a>
            </li>
            <li class="py-2 px-3"><a class="btn btn-primary btn-sm w-100" href="{{ route('logout') }}">Log Out</a>
            </li>
          </ul>
      </li>
      <li class="header-element">
        <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas"
          data-bs-target="#switcher-canvas">
          <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 256 256">
            <rect width="256" height="256" fill="none" />
            <circle cx="128" cy="128" r="40" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16" />
            <path
              d="M41.43,178.09A99.14,99.14,0,0,1,31.36,153.8l16.78-21a81.59,81.59,0,0,1,0-9.64l-16.77-21a99.43,99.43,0,0,1,10.05-24.3l26.71-3a81,81,0,0,1,6.81-6.81l3-26.7A99.14,99.14,0,0,1,102.2,31.36l21,16.78a81.59,81.59,0,0,1,9.64,0l21-16.77a99.43,99.43,0,0,1,24.3,10.05l3,26.71a81,81,0,0,1,6.81,6.81l26.7,3a99.14,99.14,0,0,1,10.07,24.29l-16.78,21a81.59,81.59,0,0,1,0,9.64l16.77,21a99.43,99.43,0,0,1-10,24.3l-26.71,3a81,81,0,0,1-6.81,6.81l-3,26.7a99.14,99.14,0,0,1-24.29,10.07l-21-16.78a81.59,81.59,0,0,1-9.64,0l-21,16.77a99.43,99.43,0,0,1-24.3-10l-3-26.71a81,81,0,0,1-6.81-6.81Z"
              fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="16" />
          </svg>
        </a>
      </li>
    </ul>
  </div>
</header>