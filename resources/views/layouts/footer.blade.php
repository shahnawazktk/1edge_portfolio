<style>
  /* ===== FOOTER RESPONSIVE STYLES ===== */
  
  /* Info Section (Footer Top) */
  .info_section {
    background: #044964;
    color: #fff;
    padding: 60px 0 40px;
  }
  
  /* Footer Logo */
  .footer-logo-box {
    margin-bottom: 20px;
  }
  
  .footer-logo {
    max-height: 70px;
    width: auto;
    object-fit: contain;
    display: block;
    /* Fix footer logo visibility by adding white background */
    background-color:#044964;
    padding: 8px 12px;
    border-radius: 8px;
   
  }
  
  .info_section h6 {
    font-size: 1.25rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  
  .info_section p {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 20px;
  }
  
  .info_section ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .info_section ul li {
    margin-bottom: 12px;
  }
  
  .info_section ul li a {
    color: rgba(255, 255, 255, 0.75);
    text-decoration: none;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    display: inline-block;
  }
  
  .info_section ul li a:hover {
    color: #fe4801;
    padding-left: 5px;
  }
  
  /* Contact Info Links */
  .info_link-box {
    margin-bottom: 25px;
  }
  
  .info_link-box a {
    display: flex;
    align-items: center;
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    margin-bottom: 15px;
    transition: color 0.3s ease;
  }
  
  .info_link-box a:hover {
    color: #fe4801;
  }
  
  .info_link-box a img {
    width: 20px;
    height: 20px;
    margin-right: 20px;
    margin-bottom: 15px;
    filter: brightness(0) invert(1);
    opacity: 0.8;
  }
  
  .info_link-box a span {
    font-size: 0.9rem;
    line-height: 1.4;
  }
  
  /* Social Media Icons */
  .info_social {
    display: flex;
    gap: 15px;
    margin-top: 20px;
    flex-wrap: wrap;
  }
  
  .info_social div {
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    flex-shrink: 0;
  }
  
  .info_social div:hover {
    background: #fe4801;
    transform: translateY(-3px);
  }
  
  .info_social div a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
  }
  
  .info_social div img {
    width: 18px;
    height: 18px;
    object-fit: contain;
    filter: brightness(0) invert(1);
  }
  
  /* Footer Bottom Section */
  .footer_section {
    background: #011d2e;
    padding: 25px 0;
    text-align: center;
  }
  
  .footer_section p {
    margin: 0;
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.9rem;
  }
  
  .footer_section a {
    color: #fe4801;
    text-decoration: none;
    font-weight: 600;
    margin-left: 5px;
    transition: color 0.3s ease;
  }
  
  .footer_section a:hover {
    color: #fff;
  }
  
  /* ===== RESPONSIVE BREAKPOINTS ===== */
  
  /* Large Tablets and Small Desktops (992px - 1199px) */
  @media (max-width: 1199px) {
    .info_section {
      padding: 50px 0 35px;
    }
    
    .info_section h6 {
      font-size: 1.15rem;
      margin-bottom: 18px;
    }
  }
  
  /* Tablets (768px - 991px) */
  @media (max-width: 991px) {
    .info_section {
      padding: 45px 0 30px;
    }
    
    .info_section .row > div {
      margin-bottom: 35px;
    }
    
    .info_section .row > div:last-child {
      margin-bottom: 0;
    }
    
    .info_section h6 {
      font-size: 1.1rem;
      margin-bottom: 15px;
    }
  }
  
  /* Mobile Landscape and Small Tablets (576px - 767px) */
  @media (max-width: 767px) {
    .info_section {
      padding: 40px 0 25px;
    }
    
    .info_section .row > div {
      text-align: center;
      margin-bottom: 30px;
    }
    
    /* Center logo on mobile */
    .footer-logo-box {
      display: flex;
      justify-content: center;
      margin-bottom: 15px;
    }
    
    .footer-logo {
      max-height: 55px;
      /* Maintain white background on mobile for footer logo */
      background-color: rgba(255, 255, 255, 0.95);
      padding: 6px 10px;
      border-radius: 6px;
    }
    
    .info_section h6 {
      font-size: 1.05rem;
      margin-bottom: 15px;
    }
    
    .info_section p {
      font-size: 0.9rem;
      margin-bottom: 15px;
    }
    
    .info_section ul li {
      margin-bottom: 10px;
    }
    
    .info_section ul li a {
      font-size: 0.9rem;
    }
    
    /* Center align contact links on mobile */
    .info_link-box a {
      justify-content: center;
      margin-bottom: 12px;
    }
    
    .info_link-box a span {
      font-size: 0.85rem;
    }
    
    /* Center social icons on mobile */
    .info_social {
      justify-content: center;
      gap: 12px;
      margin-top: 15px;
    }
    
    .info_social div {
      width: 40px !important;
      height: 40px !important;
    }
    
    .info_social div img {
      width: 16px;
      height: 16px;
    }
    
    /* Footer bottom */
    .footer_section {
      padding: 20px 15px;
    }
    
    .footer_section p {
      font-size: 0.85rem;
      line-height: 1.6;
    }
  }
  
  /* Mobile Portrait (up to 575px) */
  @media (max-width: 575px) {
    .info_section {
      padding: 35px 0 20px;
    }
    
    .info_section .row > div {
      margin-bottom: 25px;
    }
    
    .footer-logo {
      max-height: 50px;
      /* Maintain white background on small mobile for footer logo */
      background-color: rgba(255, 255, 255, 0.95);
      padding: 5px 8px;
      border-radius: 5px;
    }
    
    .info_section h6 {
      font-size: 1rem;
      margin-bottom: 12px;
    }
    
    .info_section p {
      font-size: 0.85rem;
    }
    
    .info_section ul li {
      margin-bottom: 8px;
    }
    
    .info_section ul li a {
      font-size: 0.85rem;
    }
    
    .info_link-box a {
      margin-bottom: 10px;
    }
    
    .info_link-box a img {
      width: 18px;
      height: 18px;
      margin-right: 10px;
    }
    
    .info_link-box a span {
      font-size: 0.8rem;
    }
    
    .info_social {
      gap: 10px;
    }
    
    .info_social div {
      width: 36px;
      height: 36px;
    }
    
    .info_social div img {
      width: 15px;
      height: 15px;
    }
    
    .footer_section {
      padding: 18px 10px;
    }
    
    .footer_section p {
      font-size: 0.8rem;
    }
  }
  
  /* Extra Small Mobile (up to 400px) */
  @media (max-width: 400px) {
    .info_section {
      padding: 30px 0 15px;
    }
    
    .info_section .row > div {
      margin-bottom: 20px;
    }
    
    .footer-logo {
      max-height: 45px;
      /* Maintain white background on extra small mobile for footer logo */
      background-color: rgba(255, 255, 255, 0.95);
      padding: 4px 6px;
      border-radius: 4px;
    }
    
    .info_section h6 {
      font-size: 0.95rem;
      margin-bottom: 10px;
    }
    
    .info_section p {
      font-size: 0.8rem;
    }
    
    .info_link-box a span {
      font-size: 0.75rem;
    }
    
    .info_social div {
      width: 34px;
      height: 34px;
    }
    
    .footer_section p {
      font-size: 0.75rem;
    }
  }
</style>

<!-- info section -->
<section class="info_section">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="footer-logo-box">
          <img src="{{ asset('assets/images/1edgeLogoT-06.png') }}" 
               alt="{{ $footerData['company']['name'] ?? '1Edge' }} Logo" 
               class="footer-logo">
        </div>
        <p>
          {{ $footerData['company']['description'] ?? 'Innovative IT solutions for modern businesses' }}
        </p>
        <div class="info_social ">
          @foreach($footerData['social_media'] ?? [] as $social)
          <div>
            <a href="{{ $social['url'] ?? '#' }}" target="_blank" rel="noopener noreferrer" >
              <img src="{{ asset($social['icon']) }}" alt="{{ $social['name'] }}" style="width: 40px; height: 40px;">
            </a>
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-md-3">
        <h6>Quick Links</h6>
        <ul>
          @foreach($footerData['quick_links'] ?? [] as $link)
          <li><a href="{{ url($link['url']) }}">{{ $link['name'] }}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="col-md-3">
        <h6>Our Services</h6>
        <ul>
          @foreach($footerData['services'] ?? [] as $service)
          <li><a href="{{ url($service['url']) }}">{{ $service['name'] }}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="col-md-3">
        <h6>Contact Info</h6>
        <div class="info_link-box">
          @if(isset($footerData['contact']['phone']))
          <a href="tel:{{ $footerData['contact']['phone'] }}">
            <img src="{{ asset('assets/images/call.png') }}" alt="Phone">
            <span>{{ $footerData['contact']['phone'] }}</span>
          </a>
          @endif
          
          @if(isset($footerData['contact']['email']))
          <a href="mailto:{{ $footerData['contact']['email'] }}">
            <img src="{{ asset('assets/images/envelope.png') }}" alt="Email">
            <span>{{ $footerData['contact']['email'] }}</span>
          </a>
          @endif
          
          @if(isset($footerData['contact']['address']))
          <a href="#">
            <img src="{{ asset('assets/images/location.png') }}" alt="Location">
            <span>{{ $footerData['contact']['address'] }}</span>
          </a>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end info section -->

<!-- footer section -->
<section class="footer_section">
  <div class="container">
    <p>
      &copy; {{ $footerData['company']['copyright_year'] ?? date('Y') }} All Rights Reserved By
      <a href="{{ url('/') }}">{{ $footerData['company']['name'] ?? '1Edge Innovation' }}</a>
    </p>
  </div>
</section>
<!-- end footer section -->
