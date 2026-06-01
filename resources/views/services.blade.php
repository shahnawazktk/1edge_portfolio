@extends('layouts.app')

@section('title', 'Services — 1Edge School System')
@section('body_class', 'sub_page')

@push('styles')
<style>
  /* ---- Service page overrides ---- */
  .hero_area { background: linear-gradient(135deg, #022f4a 0%, #0f3a53 100%); }

  /* Page banner */
  .page_banner {
    padding: 80px 0 60px;
    text-align: center;
    color: #fff;
  }
  .page_banner h1 { font-size: 2.4rem; font-weight: 700; margin-bottom: 10px; }
  .page_banner p { font-size: 1.05rem; opacity: 0.85; max-width: 600px; margin: 0 auto; }

  /* Service cards grid */
  .services_grid { padding: 70px 0; background: #f8f9fa; }
  .service-card {
    background: #fff;
    border-radius: 10px;
    padding: 35px 25px;
    margin-bottom: 30px;
    border: 1px solid #e8e8e8;
    transition: all 0.3s ease;
    height: 100%;
  }
  .service-card:hover {
    border-color: #fe4801;
    box-shadow: 0 10px 30px rgba(254,72,1,0.12);
    transform: translateY(-6px);
  }
  .service-card .icon-wrap {
    width: 70px; height: 70px;
    background: #fff5f0;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 20px;
  }
  .service-card .icon-wrap svg {
    width: 34px; height: 34px;
    stroke: #fe4801;
  }
  .service-card h5 {
    font-weight: 700;
    color: #022f4a;
    margin-bottom: 12px;
    font-size: 1.1rem;
  }
  .service-card p { color: #555; font-size: 0.93rem; line-height: 1.7; }
  .service-card .read-more {
    display: inline-block;
    margin-top: 15px;
    color: #fe4801;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    border-bottom: 2px solid transparent;
    transition: border-color 0.2s;
  }
  .service-card .read-more:hover { border-color: #fe4801; }

  /* How it works */
  .how_section { padding: 70px 0; }
  .how_section .heading_container { margin-bottom: 50px; }
  .step-box { text-align: center; padding: 20px; }
  .step-box .step-num {
    width: 55px; height: 55px;
    background: #fe4801;
    color: #fff;
    border-radius: 50%;
    font-size: 1.4rem;
    font-weight: 700;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 18px;
  }
  .step-box h6 { font-weight: 700; color: #022f4a; margin-bottom: 8px; }
  .step-box p { color: #666; font-size: 0.9rem; }

  /* CTA banner */
  .cta_section {
    background: linear-gradient(135deg, #fe4801 0%, #ff7043 100%);
    padding: 60px 0;
    text-align: center;
    color: #fff;
  }
  .cta_section h2 { font-size: 2rem; font-weight: 700; margin-bottom: 15px; }
  .cta_section p { font-size: 1rem; opacity: 0.9; margin-bottom: 30px; }
  .cta_section .btn-cta {
    background: #fff;
    color: #fe4801;
    font-weight: 700;
    padding: 12px 35px;
    border-radius: 30px;
    text-decoration: none;
    font-size: 1rem;
    transition: all 0.3s;
    display: inline-block;
  }
  .cta_section .btn-cta:hover { background: #022f4a; color: #fff; }

  /* ===== RESPONSIVE DESIGN ===== */
  
  /* Tablets (768px - 991px) */
  @media (max-width: 991px) {
    .page_banner h1 { font-size: 2.1rem; }
    .page_banner p { font-size: 1rem; }
    
    .services_grid { padding: 60px 0; }
    .service-card { padding: 30px 20px; }
    
    .how_section { padding: 60px 0; }
    
    .cta_section { padding: 50px 0; }
    .cta_section h2 { font-size: 1.8rem; }
  }
  
  /* Mobile (576px - 767px) */
  @media (max-width: 767px) {
    .page_banner { padding: 60px 0 40px; }
    .page_banner h1 { font-size: 1.9rem; }
    .page_banner p { font-size: 0.95rem; padding: 0 15px; }
    
    .services_grid { padding: 50px 0; }
    .heading_container h2 { font-size: 1.6rem; }
    .heading_container p { font-size: 0.9rem; }
    
    .service-card { padding: 28px 20px; margin-bottom: 25px; }
    .service-card .icon-wrap { width: 60px; height: 60px; margin-bottom: 18px; }
    .service-card .icon-wrap svg { width: 30px; height: 30px; }
    .service-card h5 { font-size: 1.05rem; }
    .service-card p { font-size: 0.9rem; }
    
    .how_section { padding: 50px 0; }
    .step-box { padding: 15px; }
    .step-box .step-num { width: 50px; height: 50px; font-size: 1.3rem; margin-bottom: 15px; }
    .step-box h6 { font-size: 1.05rem; }
    .step-box p { font-size: 0.88rem; }
    
    .cta_section { padding: 50px 0; }
    .cta_section h2 { font-size: 1.7rem; }
    .cta_section p { font-size: 0.95rem; }
    .cta_section .btn-cta { padding: 11px 30px; font-size: 0.95rem; }
  }
  
  /* Small Mobile (up to 575px) */
  @media (max-width: 575px) {
    .page_banner { padding: 50px 0 35px; }
    .page_banner h1 { font-size: 1.7rem; }
    .page_banner p { font-size: 0.9rem; }
    
    .services_grid { padding: 45px 0; }
    .heading_container { margin-bottom: 35px; }
    .heading_container h2 { font-size: 1.4rem; }
    .heading_container p { font-size: 0.85rem; }
    
    .service-card { padding: 25px 18px; }
    .service-card .icon-wrap { width: 55px; height: 55px; }
    .service-card .icon-wrap svg { width: 28px; height: 28px; }
    .service-card h5 { font-size: 1rem; }
    .service-card p { font-size: 0.88rem; }
    .service-card .read-more { font-size: 0.88rem; margin-top: 12px; }
    
    .how_section { padding: 45px 0; }
    .step-box .step-num { width: 45px; height: 45px; font-size: 1.2rem; }
    .step-box h6 { font-size: 1rem; }
    .step-box p { font-size: 0.85rem; }
    
    .cta_section { padding: 45px 0; }
    .cta_section h2 { font-size: 1.5rem; }
    .cta_section p { font-size: 0.9rem; padding: 0 15px; }
    .cta_section .btn-cta { 
      padding: 10px 28px; 
      font-size: 0.9rem;
      display: block;
      max-width: 250px;
      margin: 0 auto;
    }
  }
  
  /* Extra Small Mobile (up to 400px) */
  @media (max-width: 400px) {
    .page_banner h1 { font-size: 1.5rem; }
    .page_banner p { font-size: 0.85rem; }
    
    .heading_container h2 { font-size: 1.3rem; }
    
    .service-card { padding: 22px 15px; }
    
    .cta_section h2 { font-size: 1.4rem; }
    .cta_section p { font-size: 0.85rem; }
  }
</style>
@endpush

@section('content')
<div class="hero_area">
  <!-- page banner -->
  <div class="page_banner">
    <h1>Our Services</h1>
    <p>Everything your school needs — from student management to parent communication — in one powerful platform.</p>
  </div>
  <!-- end page banner -->
</div>
<!-- end hero_area -->

<!-- services grid section -->
<section class="services_grid">
  <div class="container">
    <div class="heading_container text-center mb-5">
      <h2>What We Offer</h2>
      <p style="color:#555; max-width:600px; margin:10px auto 0;">
        1Edge delivers a complete school management ecosystem. Each service is designed to save time,
        reduce paperwork, and improve outcomes for students, teachers, and administrators.
      </p>
    </div>

    <div class="row">

      <!-- 1. Student Management -->
      <div class="col-md-6 col-lg-4 d-flex">
        <div class="service-card">
          <div class="icon-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </div>
          <h5>1School</h5>
          <p>
            Maintain complete student profiles — academic records, attendance history, health data,
            and co-curricular achievements — all in one secure, searchable database.
          </p>
          <a href="{{ url('/product') }}" class="read-more">Learn More →</a>
        </div>
      </div>

      <!-- 2. Attendance Tracking -->
      <div class="col-md-6 col-lg-4 d-flex">
        <div class="service-card">
          <div class="icon-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
              <polyline points="9 16 11 18 15 14"></polyline>
            </svg>
          </div>
          <h5>1Station</h5>
          <p>
            Mark and monitor daily attendance digitally. Automated SMS alerts notify parents
            instantly when a student is absent, reducing absenteeism and improving accountability.
          </p>
          <a href="{{ url('/product') }}" class="read-more">Learn More →</a>
        </div>
      </div>

      <!-- 3. Online Examinations -->
      <div class="col-md-6 col-lg-4 d-flex">
        <div class="service-card">
          <div class="icon-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
              <polyline points="14 2 14 8 20 8"></polyline>
              <line x1="16" y1="13" x2="8" y2="13"></line>
              <line x1="16" y1="17" x2="8" y2="17"></line>
              <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
          </div>
          <h5>Hospital Managment</h5>
          <p>
            Conduct secure online tests with auto-grading, instant result publishing, and
            detailed performance analytics. Supports MCQs, short answers, and timed assessments.
          </p>
          <a href="{{ url('/product') }}" class="read-more">Learn More →</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end services grid section -->


<!-- how it works section -->
<section class="how_section">
  <div class="container">
    <div class="heading_container text-center">
      <h2>How It Works</h2>
      <p style="color:#555; max-width:550px; margin:10px auto 0;">
        Getting started with 1Edge is simple. Your school can be fully operational in just a few steps.
      </p>
    </div>
    <div class="row mt-5">
      <div class="col-md-3">
        <div class="step-box">
          <div class="step-num">1</div>
          <h6>Sign Up</h6>
          <p>Register your school and choose a plan that fits your size and budget.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="step-box">
          <div class="step-num">2</div>
          <h6>Setup &amp; Import</h6>
          <p>Import student and staff data. Our team helps you configure everything in 24 hours.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="step-box">
          <div class="step-num">3</div>
          <h6>Train Your Team</h6>
          <p>Free onboarding sessions for teachers and administrators to get up to speed quickly.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="step-box">
          <div class="step-num">4</div>
          <h6>Go Live</h6>
          <p>Launch the platform school-wide and start experiencing smarter school management.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end how it works section -->


<!-- CTA section -->
<section class="cta_section">
  <div class="container">
    <h2>Ready to Transform Your School?</h2>
    <p>Join hundreds of schools already using 1Edge to deliver better education outcomes.</p>
    <a href="{{ url('/contact') }}" class="btn-cta">Get a Free Demo</a>
  </div>
</section>
<!-- end CTA section -->
@endsection
