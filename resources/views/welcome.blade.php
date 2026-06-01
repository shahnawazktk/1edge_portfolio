@extends('layouts.app')

@section('title', '1Edge School System - Home')

@push('styles')
<style>
  /* ---- 1Edge School overrides ---- */
  .hero_area {
    background: linear-gradient(135deg, #044964 0%, #025370 100%);
  }

  /* Hero/Slider Section */
  .slider_section {
    padding: 80px 0;
    min-height: 500px;
    display: flex;
    align-items: center;
    background: transparent;
  }
  
  .slider_section .detail-box h1 {
    font-size: 2.8rem;
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
    margin-bottom: 20px;
  }
  
  .slider_section .detail-box p {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
    margin-bottom: 30px;
  }
  
  .slider_section .btn {
    padding: 12px 32px;
    font-weight: 600;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s;
    margin-right: 15px;
    margin-bottom: 10px;
  }
  
  .slider_section .btn-primary {
    background: #fe4801;
    color: #fff;
    border: 2px solid #fe4801;
  }
  
  .slider_section .btn-primary:hover {
    background: #e03d00;
    border-color: #e03d00;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(254, 72, 1, 0.3);
  }
  
  .slider_section .btn-outline-primary {
    background: transparent;
    color: #fff;
    border: 2px solid #fff;
  }
  
  .slider_section .btn-outline-primary:hover {
    background: #fff;
    color: #022f4a;
  }
  
  /* Image Box Styling - Larger and Responsive */
  .slider_section .img-box {
    width: 100%;
    max-width: 650px;
    margin: 0 auto;
    padding: 0 15px;
  }
  
  .slider_section .img-box img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 10px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
  }
  
  .slider_section .img-box img:hover {
    transform: scale(1.02);
  }
  
  /* Responsive Design for Large Screens (Desktop) */
  @media (min-width: 1200px) {
    .slider_section .img-box {
      max-width: 700px;
    }
    
    .slider_section {
      padding: 100px 0;
    }
  }
  
  /* Responsive Design for Medium Screens (Tablets) */
  @media (max-width: 991px) {
    .slider_section {
      padding: 60px 0;
    }
    
    .slider_section .detail-box h1 {
      font-size: 2.2rem;
    }
    
    .slider_section .detail-box p {
      font-size: 1rem;
    }
    
    .slider_section .img-box {
      max-width: 550px;
    }
  }
  
  /* Responsive Design for Small Screens (Mobile) */
  @media (max-width: 767px) {
    .slider_section {
      padding: 40px 0;
      min-height: auto;
    }
    
    .slider_section .detail-box {
      text-align: center;
    }
    
    .slider_section .detail-box h1 {
      font-size: 1.8rem;
      margin-bottom: 15px;
    }
    
    .slider_section .detail-box p {
      font-size: 0.95rem;
      margin-bottom: 25px;
    }
    
    .slider_section .btn {
      padding: 10px 24px;
      font-size: 0.9rem;
      margin-right: 8px;
      margin-bottom: 10px;
    }
    
    .slider_section .img-box {
      margin-top: 30px;
      max-width: 100%;
      padding: 0 10px;
    }
    
    .slider_section .img-box img {
      border-radius: 8px;
    }
  }
  
  /* Responsive Design for Extra Small Screens */
  @media (max-width: 575px) {
    .slider_section .detail-box h1 {
      font-size: 1.5rem;
    }
    
    .slider_section .btn {
      display: block;
      width: 100%;
      margin-right: 0;
      margin-bottom: 12px;
    }
    
    .slider_section .img-box {
      padding: 0 5px;
    }
    
    .slider_section .img-box img {
      border-radius: 6px;
    }
  }

  /* Stats section */
  .school_stats { background-color: #f8f9fa; padding: 60px 0; }
  .school_stats .stat-box { text-align: center; padding: 30px 20px; }
  .school_stats .stat-box h3 { font-size: 2.8rem; font-weight: bold; color: #fe4801; }
  .school_stats .stat-box p { color: #022f4a; font-weight: 600; margin: 0; }

  /* Programs section */
  .programs_section { padding: 75px 0; background: #fff; }
  .programs_section .sec-title { text-align: center; margin-bottom: 45px; }
  .programs_section .sec-title h2 { font-size: 2rem; font-weight: 700; color: #022f4a; }
  .programs_section .sec-title p { color: #666; max-width: 560px; margin: 10px auto 0; }
  .programs_section .program-card {
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    padding: 35px 20px;
    text-align: center;
    transition: all 0.3s;
    margin-bottom: 30px;
    height: 100%;
  }
  .programs_section .program-card:hover {
    border-color: #fe4801;
    box-shadow: 0 8px 25px rgba(254,72,1,0.15);
    transform: translateY(-5px);
  }
  .programs_section .program-card .icon {
    width: 65px; height: 65px;
    background: #fff3ee;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 18px;
  }
  .programs_section .program-card .icon svg {
    width: 30px; height: 30px;
    stroke: #fe4801;
  }
  .programs_section .program-card h5 { font-weight: 700; color: #022f4a; margin-bottom: 10px; }
  .programs_section .program-card p { color: #666; font-size: 0.9rem; }
</style>
@endpush

@section('content')
<div class="hero_area">
  <!-- slider / hero section -->
  <section class="slider_section">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Side Content -->
        <div class="col-lg-6 col-md-12">
          <div class="detail-box">
            <h1>Transform Your Business with 1Edge Technologies</h1>
            <p>We deliver innovative IT solutions and cutting-edge products that empower businesses to thrive in the digital age.</p>
            <div>
              <a href="{{ url('/contact') }}" class="btn btn-primary">Explore Products</a>
              <a href="{{ url('/service') }}" class="btn btn-outline-primary">Our Services</a>
            </div>
          </div>
        </div>

        <!-- Right Side Image -->
        <div class="col-lg-6 col-md-12 text-center mt-4 mt-lg-0">
          <div class="img-box">
            <img src="{{asset('assets/images/working_01.jpg')}}" alt="1Edge Technologies" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->
</div>
<!-- end hero_area -->

<!-- quick enquiry / demo request section -->
<section class="find_section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="text-center" style="background: #fff; padding: 50px 40px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
          <h2 style="font-size: 2rem; font-weight: 700; color: #022f4a; margin-bottom: 15px;">Why Choose 1Edge?</h2>
          <p style="font-size: 1.1rem; color: #666; margin: 0;">We combine innovation with reliability</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end quick enquiry section -->

<!-- feature section -->
<section class="feature_section layout_padding2">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="box">
          <div class="img-box">
            <img src="{{asset('assets/images/money.png')}}" alt="Affordable Plans">
          </div>
          <div class="detail-box">
            <h5>Fast & Efficient</h5>
            <p>Lightning-fast solutions that scale with your business</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box">
          <div class="img-box">
            <img src="{{asset('assets/images/clock.png')}}" alt="Quick Setup">
          </div>
          <div class="detail-box">
            <h5>Secure & Reliable</h5>
            <p>Enterprise-grade security for your peace of mind</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box">
          <div class="img-box">
            <img src="{{asset('assets/images/man.png')}}" alt="Dedicated Support">
          </div>
          <div class="detail-box">
            <h5>Innovation First</h5>
            <p>Cutting-edge technology to keep you ahead</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end feature section -->

<!-- stats section -->
<section class="school_stats">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-6">
        <div class="stat-box">
          <h3>500+</h3>
          <p>Schools Using 1Edge</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-box">
          <h3>2 Lakh+</h3>
          <p>Students Managed</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-box">
          <h3>9+</h3>
          <p>Powerful Modules</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-box">
          <h3>98%</h3>
          <p>Customer Satisfaction</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end stats section -->

<!-- programs section -->
<section class="programs_section">
  <div class="container">
    <div class="sec-title">
      <h2>Modules for Every School Need</h2>
      <p>From admissions to analytics — 1Edge covers every aspect of school management in one platform.</p>
    </div>
    <div class="row">
      <div class="col-md-4 d-flex">
        <div class="program-card">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </div>
          <h5>1School</h5>
          <p>Complete student profiles, academic records, and performance tracking in one place.</p>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="program-card">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
              <line x1="1" y1="10" x2="23" y2="10"></line>
            </svg>
          </div>
          <h5>1Station</h5>
          <p>Automated fee collection, receipts, and financial reporting made simple.</p>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="program-card">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
          </div>
          <h5>Hospital Managment</h5>
          <p>Instant notifications and updates to keep parents informed and engaged.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end programs section -->
@endsection
