<header class="app-header fixed-top">	   	            
  <div class="app-header-inner">  
    <div class="container-fluid py-2">
      <div class="app-header-content"> 
        <div class="row justify-content-between align-items-center">
          <div class="col-auto">
            <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
            </a>
          </div>
          <div class="app-utilities col-auto">
            <div class="app-utility-item app-user-dropdown dropdown">
              <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="{{ asset('template-assets/assets/images/user.png') }}" alt="user profile"></a>
              <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                <li><a class="dropdown-item" href="account.html">Account</a></li>
                <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="login.html">Log Out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="app-sidepanel" class="app-sidepanel"> 
    <div id="sidepanel-drop" class="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column">
      <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
      <div class="app-branding">
        <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="{{ asset('template-assets/assets/images/app-logo.svg') }}" alt="logo"><span class="logo-text">SAAS Master</span></a>
      </div>
      @include('master.navigation.index')
    </div>
  </div>
</header>