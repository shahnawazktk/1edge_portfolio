<style>
  /* Navbar Logo */
  .navbar-brand {
      padding: 0;
      display: flex;
      align-items: center;
  }

  .site-logo {
      max-height: 60px;
      width: auto;
      object-fit: contain;
      margin-left: 80px;
      transition: all 0.3s ease;
      /* Fix logo visibility by adding white background with padding and border radius */
      background-color: #022f4a;
      padding: 8px 12px;
      border-radius: 8px;
      
  }

  .custom_nav-container { 
      background-color: #022f4a;
      padding: 10px 0;
  }
.header_section {
    padding: 5px 0;
    font-family: "Roboto", sans-serif;
    height: auto;
}
  .custom_nav-container .navbar-toggler {
      border-color: rgba(255, 255, 255, 0.3);
      padding: 8px 12px;
  }

  .custom_nav-container .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
  }

  .custom_nav-container .navbar-nav {
      align-items: center;
  }

  .custom_nav-container .nav-link {
      color: rgba(255, 255, 255, 0.85);
      font-weight: 500;
      padding: 10px 18px;
      transition: all 0.3s ease;
      border-radius: 4px;
  }

  .custom_nav-container .nav-link:hover {
      color: #fe4801;
      background: rgba(254, 72, 1, 0.1);
  }

  .custom_nav-container .nav-item.active .nav-link {
      color: #fe4801;
      font-weight: 600;
  }

  /* Tablet responsive */
  @media (max-width: 991px) {
      .site-logo {
          margin-left: 40px;
          max-height: 50px;
          /* Maintain white background on tablets */
          background-color: #022f4a;
          padding: 6px 10px;
          border-radius: 6px;
      }

      .custom_nav-container .navbar-collapse {
          background: #022f4a;
          padding: 15px;
          margin-top: 10px;
          border-radius: 8px;
      }

      .custom_nav-container .nav-link {
          padding: 12px 15px;
          margin: 5px 0;
      }
  }

  /* Mobile responsive */
  @media (max-width: 768px) {
      .site-logo {
          max-height: 45px;
          margin-left: 15px;
          /* Maintain white background on mobile */
          background-color: #022f4a;
          padding: 5px 8px;
          border-radius: 5px;
      }

      .custom_nav-container {
          padding: 8px 0;
      }

      .custom_nav-container .navbar-collapse {
          margin-top: 15px;
      }
  }

  /* Extra small mobile */
  @media (max-width: 576px) {
      .site-logo {
          max-height: 40px;
          margin-left: 10px;
          /* Maintain white background on extra small mobile */
          background-color: #022f4a;
          padding: 4px 6px;
          border-radius: 4px;
      }
  }
</style>

<!-- header section -->
<header class="header_section">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container">
      <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('assets/images/1edgeLogoT-06.png') }}" 
              alt="1Edge Logo" 
              class="site-logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/') }}">Home @if(Request::is('/'))<span class="sr-only">(current)</span>@endif</a>
            </li>
            <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/about') }}">About Us</a>
            </li>
            <li class="nav-item {{ Request::is('product') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/product') }}">Product</a>
            </li>
            <li class="nav-item {{ Request::is('service') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/service') }}">Services</a>
            </li>
            <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
  </div>
</header>
<!-- end header section -->
