<style>
  /* ===== FOOTER RESPONSIVE STYLES ===== */
  
  /* Info Section (Footer Top) */
  .info_section {
    background: #022f4a;
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
    margin-right: 12px;
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
      width: 38px;
      height: 38px;
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
          <img src="{{ asset('assets/images/1edgeLogo-06.png') }}" alt="1Edge Logo" class="footer-logo">
        </div>
        <p>
          Empowering schools with smart technology solutions for better education management.
        </p>
        <div class="info_social">
          <div>
            <a href="">
              <img src="{{ asset('assets/images/fb.png') }}" alt="Facebook">
            </a>
          </div>
          <div>
            <a href="">
              <img src="{{ asset('assets/images/twitter.png') }}" alt="Twitter">
            </a>
          </div>
          <div>
            <a href="">
              <img src="{{ asset('assets/images/linkedin.png') }}" alt="LinkedIn">
            </a>
          </div>
          <div>
            <a href="">
              <img src="{{ asset('assets/images/insta.png') }}" alt="Instagram">
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <h6>Quick Links</h6>
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/about') }}">About Us</a></li>
          <li><a href="{{ url('/product') }}">Products</a></li>
          <li><a href="{{ url('/service') }}">Services</a></li>
          <li><a href="{{ url('/contact') }}">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h6>Our Services</h6>
        <ul>
          <li><a href="">Student Management</a></li>
          <li><a href="">Fee Management</a></li>
          <li><a href="">Attendance System</a></li>
          <li><a href="">Online Examinations</a></li>
          <li><a href="">Parent Communication</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h6>Contact Info</h6>
        <div class="info_link-box">
          <a href="tel:+923001234567">
            <img src="{{ asset('assets/images/call.png') }}" alt="Phone">
            <span>+92 300 1234567</span>
          </a>
          <a href="mailto:info@1edge.com">
            <img src="{{ asset('assets/images/envelope.png') }}" alt="Email">
            <span>info@1edge.com</span>
          </a>
          <a href="">
            <img src="{{ asset('assets/images/location.png') }}" alt="Location">
            <span>Karachi, Pakistan</span>
          </a>
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
      &copy; {{ date('Y') }} All Rights Reserved By
      <a href="{{ url('/') }}">1Edge Technologies</a>
    </p>
  </div>
</section>
<!-- end footer section -->
