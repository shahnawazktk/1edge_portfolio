<style>
  /* Navbar Logo */
  .navbar-brand {
      padding: 0;
      display: flex;
      align-items: center;
  }

  .site-logo {
      max-height: 60px;   /* Logo height */
      width: auto;
      object-fit: contain;
  }

  /* Mobile responsive */
  @media (max-width: 768px) {
      .site-logo {
          max-height: 45px;
      }
  }
</style>

<!-- header section -->
<header class="header_section">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container">
      <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('assets/images/1edgeLogo-06.png') }}" 
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
