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
          <a href="javascript:void(0)" class="side-menu__item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard side-menu__icon"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" /><path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" /><path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" /><path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" /></svg>
            <span class="side-menu__label">Dashboard</span>
          </a>
        </li>
      </ul>
      <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
    </nav>
  </div>
</aside>