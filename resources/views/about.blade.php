@extends('layouts.app')

@section('title', 'About Us | 1Edge School System')
@section('body_class', 'sub_page')

@push('styles')
<style>
  .hero_area { background: linear-gradient(135deg, #044964 0%, #025370 100%); }
  /* Page Banner */
  .page_banner { background: linear-gradient(135deg, #044964 0%, #025370 100%); padding: 60px 0 40px; text-align: center; color: #fff; }
  .page_banner h1 { font-size: 2.5rem; font-weight: 700; margin-bottom: 10px; }
  .page_banner p { font-size: 1rem; opacity: 0.85; }
  .page_banner .breadcrumb { background: transparent; justify-content: center; padding: 0; margin-top: 10px; }
  .page_banner .breadcrumb-item a { color: #fe4801; }
  .page_banner .breadcrumb-item.active { color: #ccc; }
  .page_banner .breadcrumb-item + .breadcrumb-item::before { color: #aaa; }
  /* About Intro */
  .about_intro { padding: 70px 0; }
  .about_intro .heading_container { text-align: center; margin-bottom: 50px; }
  .about_intro .heading_container h2 { font-size: 2rem; font-weight: 700; color: #022f4a; margin-bottom: 15px; }
  .about_intro .heading_container h2 span { color: #fe4801; }
  .about_intro .detail-box { text-align: center; }
  .about_intro .detail-box h2 { font-size: 2rem; font-weight: 700; color: #022f4a; margin-bottom: 15px; }
  .about_intro .detail-box h2 span { color: #fe4801; }
  .about_intro .detail-box p { color: #555; line-height: 1.8; margin-bottom: 15px; }
  .about_intro .detail-box a { display: inline-block; background: #fe4801; color: #fff; padding: 10px 28px; border-radius: 4px; text-decoration: none; font-weight: 600; transition: background 0.3s; }
  .about_intro .detail-box a:hover { background: #022f4a; }
  .about_intro .img-box { text-align: center; }
  .about_intro .img-grid img { width: 100%; border-radius: 8px; object-fit: cover; height: 200px; margin-bottom: 15px; }
  /* Mission & Vision */
  .mission_section { background: #f8f9fa; padding: 70px 0; }
  .mission_section .heading_container { text-align: center; margin-bottom: 40px; }
  .mission_section .heading_container h2 { font-size: 2rem; font-weight: 700; color: #022f4a; }
  .mission_section .heading_container h2 span { color: #fe4801; }
  .mission_section .card { border: none; border-radius: 10px; padding: 35px 25px; text-align: center; height: 100%; box-shadow: 0 4px 20px rgba(0,0,0,0.07); transition: transform 0.3s; }
  .mission_section .card:hover { transform: translateY(-6px); }
  .mission_section .card .icon { width: 70px; height: 70px; border-radius: 50%; background: #fe4801; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; }
  .mission_section .card .icon svg { width: 32px; height: 32px; stroke: #fff; fill: none; }
  .mission_section .card h4 { font-weight: 700; color: #022f4a; margin-bottom: 12px; }
  .mission_section .card p { color: #666; line-height: 1.7; }
  /* Stats */
  .stats_section { background: #022f4a; padding: 60px 0; }
  .stats_section .stat-box { text-align: center; padding: 20px; }
  .stats_section .stat-box h3 { font-size: 2.8rem; font-weight: 700; color: #fe4801; margin-bottom: 5px; }
  .stats_section .stat-box p { color: #cde; font-weight: 600; margin: 0; font-size: 0.95rem; }
  
  /* Why Choose Us */
  .why_section .detail-box h2 { font-size: 2rem; font-weight: 700; color: #022f4a; }
  .why_section .detail-box h2 span { color: #fe4801; }
  .why_section .detail-box p { color: #555; line-height: 1.8; }
  .why_section .detail-box ul { padding-left: 0; list-style: none; margin-top: 15px; }
  .why_section .detail-box ul li { padding: 6px 0 6px 28px; position: relative; color: #444; }
  .why_section .detail-box ul li::before { content: "✔"; position: absolute; left: 0; color: #fe4801; font-weight: bold; }
  .why_section .detail-box a { display: inline-block; background: #fe4801; color: #fff; padding: 10px 28px; border-radius: 4px; text-decoration: none; font-weight: 600; margin-top: 15px; transition: background 0.3s; }
  .why_section .detail-box a:hover { background: #022f4a; }
  .why_section .img-box { position: relative; overflow: hidden; border-radius: 8px; margin-bottom: 15px; }
  .why_section .img-box img:first-child { width: 100%; height: 180px; object-fit: cover; border-radius: 8px; }
  .why_section .img-box a { position: absolute; bottom: 8px; right: 8px; }
  .why_section .img-box a img { width: 28px; }
  /* Team Section */
  .team_section { padding: 70px 0; background: #fff; }
  .team_section .heading_container { text-align: center; margin-bottom: 40px; }
  .team_section .heading_container h2 { font-size: 2rem; font-weight: 700; color: #022f4a; }
  .team_section .heading_container h2 span { color: #fe4801; }
  .team_section .heading_container p { color: #666; margin-top: 10px; }
  .team_section .team-card { text-align: center; padding: 25px 15px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); margin-bottom: 30px; transition: transform 0.3s; }
  .team_section .team-card:hover { transform: translateY(-5px); }
  .team_section .team-card img { width: 90px; height: 90px; border-radius: 50%; object-fit: cover; border: 3px solid #fe4801; margin-bottom: 15px; }
  .team_section .team-card h5 { font-weight: 700; color: #022f4a; margin-bottom: 4px; }
  .team_section .team-card span { font-size: 0.85rem; color: #fe4801; font-weight: 600; }
  .team_section .team-card p { font-size: 0.88rem; color: #666; margin-top: 10px; }
  /* Values Section */
  .values_section { background: #f8f9fa; padding: 70px 0; }
  .values_section .heading_container { text-align: center; margin-bottom: 40px; }
  .values_section .heading_container h2 { font-size: 2rem; font-weight: 700; color: #022f4a; }
  .values_section .heading_container h2 span { color: #fe4801; }
  .values_section .value-box { display: flex; align-items: flex-start; gap: 18px; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 3px 15px rgba(0,0,0,0.06); margin-bottom: 20px; }
  .values_section .value-box .v-icon { min-width: 50px; height: 50px; background: #fe4801; border-radius: 8px; display: flex; align-items: center; justify-content: center; }
  .values_section .value-box .v-icon svg { width: 24px; height: 24px; stroke: #fff; fill: none; }
  .values_section .value-box h5 { font-weight: 700; color: #022f4a; margin-bottom: 5px; }
  .values_section .value-box p { color: #666; font-size: 0.9rem; margin: 0; }

  /* ===== RESPONSIVE DESIGN ===== */
  
  /* Tablets (768px - 991px) */
  @media (max-width: 991px) {
    .page_banner h1 { font-size: 2.2rem; }
    .page_banner p { font-size: 0.95rem; }
    
    .about_intro { padding: 60px 0; }
    .about_intro .detail-box h2 { font-size: 1.8rem; }
    
    .mission_section { padding: 60px 0; }
    .mission_section .heading_container h2 { font-size: 1.8rem; }
    
    .why_section .detail-box h2 { font-size: 1.8rem; }
    
    .team_section { padding: 60px 0; }
    .team_section .heading_container h2 { font-size: 1.8rem; }
    
    .values_section { padding: 60px 0; }
    .values_section .heading_container h2 { font-size: 1.8rem; }
  }
  
  /* Mobile (576px - 767px) */
  @media (max-width: 767px) {
    .page_banner { padding: 50px 0 35px; }
    .page_banner h1 { font-size: 2rem; }
    .page_banner p { font-size: 0.9rem; padding: 0 15px; }
    .page_banner .breadcrumb { font-size: 0.9rem; }
    
    .about_intro { padding: 50px 0; }
    .about_intro .detail-box { text-align: center; margin-bottom: 30px; }
    .about_intro .detail-box h2 { font-size: 1.6rem; }
    .about_intro .detail-box p { font-size: 0.95rem; }
    .about_intro .img-grid img { height: 180px; margin-bottom: 12px; }
    
    .stats_section { padding: 50px 0; }
    .stats_section .stat-box { padding: 20px 15px; }
    .stats_section .stat-box h3 { font-size: 2.4rem; }
    .stats_section .stat-box p { font-size: 0.9rem; }
    
    .mission_section { padding: 50px 0; }
    .mission_section .heading_container { margin-bottom: 35px; }
    .mission_section .heading_container h2 { font-size: 1.6rem; }
    .mission_section .card { padding: 30px 20px; }
    .mission_section .card .icon { width: 60px; height: 60px; margin-bottom: 18px; }
    .mission_section .card .icon svg { width: 28px; height: 28px; }
    .mission_section .card h4 { font-size: 1.1rem; }
    .mission_section .card p { font-size: 0.9rem; }
    
    .why_section { padding: 50px 0; }
    .why_section .detail-box { text-align: center; margin-bottom: 30px; }
    .why_section .detail-box h2 { font-size: 1.6rem; }
    .why_section .detail-box p { font-size: 0.95rem; }
    .why_section .detail-box ul { text-align: left; max-width: 400px; margin: 15px auto; }
    .why_section .img-box img:first-child { height: 160px; }
    
    .values_section { padding: 50px 0; }
    .values_section .heading_container { margin-bottom: 35px; }
    .values_section .heading_container h2 { font-size: 1.6rem; }
    .values_section .value-box { padding: 18px; gap: 15px; margin-bottom: 18px; }
    .values_section .value-box .v-icon { min-width: 45px; height: 45px; }
    .values_section .value-box .v-icon svg { width: 22px; height: 22px; }
    .values_section .value-box h5 { font-size: 1.05rem; }
    .values_section .value-box p { font-size: 0.88rem; }
    
    .team_section { padding: 50px 0; }
    .team_section .heading_container { margin-bottom: 35px; }
    .team_section .heading_container h2 { font-size: 1.6rem; }
    .team_section .heading_container p { font-size: 0.9rem; }
    .team_section .team-card { padding: 22px 15px; margin-bottom: 25px; }
    .team_section .team-card img { width: 80px; height: 80px; }
    .team_section .team-card h5 { font-size: 1.05rem; }
    .team_section .team-card span { font-size: 0.82rem; }
    .team_section .team-card p { font-size: 0.85rem; }
  }
  
  /* Small Mobile (up to 575px) */
  @media (max-width: 575px) {
    .page_banner { padding: 45px 0 30px; }
    .page_banner h1 { font-size: 1.7rem; }
    .page_banner p { font-size: 0.85rem; }
    .page_banner .breadcrumb { font-size: 0.85rem; }
    
    .about_intro { padding: 45px 0; }
    .about_intro .detail-box { text-align: center; margin-bottom: 30px; }
    .about_intro .detail-box h2 { font-size: 1.4rem; }
    .about_intro .detail-box p { font-size: 0.9rem; }
    .about_intro .detail-box a { padding: 9px 24px; font-size: 0.9rem; }
    .about_intro .img-grid img { height: 160px; margin-bottom: 10px; }
    
    .stats_section { padding: 45px 0; }
    .stats_section .stat-box { padding: 18px 12px; }
    .stats_section .stat-box h3 { font-size: 2.2rem; }
    .stats_section .stat-box p { font-size: 0.85rem; }
    
    .mission_section { padding: 45px 0; }
    .mission_section .heading_container h2 { font-size: 1.4rem; }
    .mission_section .card { padding: 28px 18px; }
    .mission_section .card .icon { width: 55px; height: 55px; }
    .mission_section .card .icon svg { width: 26px; height: 26px; }
    .mission_section .card h4 { font-size: 1.05rem; }
    .mission_section .card p { font-size: 0.88rem; }
    
    .why_section { padding: 45px 0; }
    .why_section .detail-box h2 { font-size: 1.4rem; }
    .why_section .detail-box p { font-size: 0.9rem; }
    .why_section .detail-box ul li { font-size: 0.9rem; padding: 5px 0 5px 26px; }
    .why_section .detail-box a { padding: 9px 24px; font-size: 0.9rem; }
    .why_section .img-box img:first-child { height: 140px; }
    
    .values_section { padding: 45px 0; }
    .values_section .heading_container h2 { font-size: 1.4rem; }
    .values_section .value-box { padding: 16px; gap: 12px; }
    .values_section .value-box .v-icon { min-width: 42px; height: 42px; }
    .values_section .value-box .v-icon svg { width: 20px; height: 20px; }
    .values_section .value-box h5 { font-size: 1rem; }
    .values_section .value-box p { font-size: 0.85rem; }
    
    .team_section { padding: 45px 0; }
    .team_section .heading_container h2 { font-size: 1.4rem; }
    .team_section .heading_container p { font-size: 0.85rem; }
    .team_section .team-card { padding: 20px 15px; }
    .team_section .team-card img { width: 75px; height: 75px; }
    .team_section .team-card h5 { font-size: 1rem; }
    .team_section .team-card span { font-size: 0.8rem; }
    .team_section .team-card p { font-size: 0.82rem; }
  }
  
  /* Extra Small Mobile (up to 400px) */
  @media (max-width: 400px) {
    .page_banner h1 { font-size: 1.5rem; }
    .page_banner p { font-size: 0.8rem; }
    
    .about_intro .detail-box h2 { font-size: 1.3rem; }
    .about_intro .img-grid img { height: 140px; }
    
    .stats_section .stat-box h3 { font-size: 2rem; }
    .stats_section .stat-box p { font-size: 0.8rem; }
    
    .mission_section .heading_container h2 { font-size: 1.3rem; }
    .mission_section .card { padding: 25px 15px; }
    
    .why_section .detail-box h2 { font-size: 1.3rem; }
    
    .values_section .heading_container h2 { font-size: 1.3rem; }
    
    .team_section .heading_container h2 { font-size: 1.3rem; }
    .team_section .team-card img { width: 70px; height: 70px; }
  }
</style>
@endpush

@section('content')
<!-- page banner -->
<section class="page_banner">
  <div class="container">
    <h1>About <span style="color:#fe4801;">1Edge Business </span></h1>
    <p>Empowering students, teachers, and parents through smart education technology</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">About Us</li>
      </ol>
    </nav>
  </div>
</section>
<!-- end page banner -->

<!-- about intro section -->
<section class="about_intro layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>Who We <span>Are</span></h2>
    </div>
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="detail-box">
          <p>
            1Edge School is a next-generation school management platform designed to
            transform the way schools operate. Founded with a vision to bridge the gap between
            education and technology, we serve hundreds of schools across the region.
          </p>
          <p>
            Our platform brings together students, teachers, parents, and administrators on a
            single unified system — making communication seamless, administration effortless,
            and learning more impactful than ever before.
          </p>
          <p>
            With powerful features like automated attendance tracking, real-time parent communication,
            online examination systems, and comprehensive analytics, we empower schools to focus on
            what truly matters — delivering quality education and nurturing future leaders.
          </p>
          <a href="{{ url('/contact') }}">Get In Touch</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="{{ asset('assets/images/about_01.jfif') }}" alt="1Edge School Management System" style="width: 100%; border-radius: 10px; box-shadow: 0 8px 30px rgba(0,0,0,0.12);">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end about intro section -->

<!-- stats section -->
<section class="stats_section">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-6">
        <div class="stat-box">
          <h3>1200+</h3>
          <p>Students Enrolled</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-box">
          <h3>80+</h3>
          <p>Qualified Teachers</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-box">
          <h3>15+</h3>
          <p>Academic Programs</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-box">
          <h3>98%</h3>
          <p>Pass Rate</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end stats section -->

<!-- mission & vision section -->
<section class="mission_section">
  <div class="container">
    <div class="heading_container">
      <h2>Our <span>Mission &amp; Vision</span></h2>
    </div>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="12" y1="8" x2="12" y2="12"></line>
              <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
          </div>
          <h4>Our Mission</h4>
          <p>To provide schools with an intelligent, affordable, and easy-to-use management system that empowers every stakeholder — from students to administrators — to achieve their best.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>
          </div>
          <h4>Our Vision</h4>
          <p>To become the most trusted school management platform in South Asia, enabling every school — regardless of size — to deliver world-class education through technology.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
            </svg>
          </div>
          <h4>Our Approach</h4>
          <p>We combine cutting-edge technology with deep educational expertise to build solutions that are practical, scalable, and genuinely improve outcomes for students and schools alike.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end mission & vision section -->

<!-- why choose us section -->
<!-- <section class="why_section layout_padding">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>Why Choose <span>1Edge?</span></h2>
          </div>
          <p>
            1Edge School System is built for modern schools that want to deliver excellence.
            Our platform integrates academics, administration, communication, and analytics
            into a single, easy-to-use solution trusted by schools across the region.
          </p>
          <ul>
            <li>Complete Student Lifecycle Management</li>
            <li>Real-Time Parent Communication App</li>
            <li>Automated Attendance &amp; Timetable</li>
            <li>Online Exams with Auto-Grading</li>
            <li>Secure Fee Collection &amp; Receipts</li>
            <li>Powerful Analytics Dashboard</li>
          </ul>
          <a href="{{ url('/service') }}">Explore Services</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-container">
          <div class="row">
            <div class="col-sm-6">
              <div class="img-box">
                <img src="{{ asset('assets/images/w-1.jpg') }}" alt="Classroom Learning">
                <a href=""><img src="{{ asset('assets/images/link.png') }}" alt=""></a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="img-box">
                <img src="{{ asset('assets/images/w-2.jpg') }}" alt="School Library">
                <a href=""><img src="{{ asset('assets/images/link.png') }}" alt=""></a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="img-box">
                <img src="{{ asset('assets/images/w-3.jpg') }}" alt="Sports Activities">
                <a href=""><img src="{{ asset('assets/images/link.png') }}" alt=""></a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="img-box">
                <img src="{{ asset('assets/images/w-4.jpg') }}" alt="Science Lab">
                <a href=""><img src="{{ asset('assets/images/link.png') }}" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- end why choose us section -->

<!-- our values section -->
<section class="values_section">
  <div class="container">
    <div class="heading_container">
      <h2>Our Core <span>Values</span></h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="value-box">
          <div class="v-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
              <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
          </div>
          <div>
            <h5>Excellence in Education</h5>
            <p>We are committed to raising the bar for educational quality by giving schools the tools they need to help every student succeed.</p>
          </div>
        </div>
        <div class="value-box">
          <div class="v-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </div>
          <div>
            <h5>Community &amp; Collaboration</h5>
            <p>We believe education thrives when students, teachers, parents, and administrators work together as one connected community.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="value-box">
          <div class="v-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
          </div>
          <div>
            <h5>Data Privacy &amp; Security</h5>
            <p>Student and school data is protected with enterprise-grade security. We follow strict data privacy standards to keep your information safe.</p>
          </div>
        </div>
        <div class="value-box">
          <div class="v-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="2" y1="12" x2="22" y2="12"></line>
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
            </svg>
          </div>
          <div>
            <h5>Accessibility for All</h5>
            <p>Our platform is designed to be affordable and accessible for schools of all sizes — from small community schools to large institutions.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end values section -->

<!-- team section -->
<section class="team_section">
  <div class="container">
    <div class="heading_container">
      <h2>Meet Our <span>Leadership Team</span></h2>
      <p>Dedicated educators and technologists working together to shape the future of school management.</p>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="team-card">
          <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt="Principal">
          <h5>Dr. Ayesha Khan</h5>
          <span>School Principal</span>
          <p>20+ years of experience in educational leadership and curriculum development across top institutions.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="team-card">
          <img src="{{ asset('assets/images/avatar/avatar-2.jpg') }}" alt="Vice Principal">
          <h5>Mr. Rahul Sharma</h5>
          <span>Vice Principal</span>
          <p>Expert in student affairs and academic planning, committed to creating a nurturing school environment.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="team-card">
          <img src="{{ asset('assets/images/avatar/avatar-3.jpg') }}" alt="Head of Technology">
          <h5>Ms. Priya Verma</h5>
          <span>Head of Technology</span>
          <p>Leads the digital transformation of school operations, ensuring seamless integration of 1Edge platform.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="team-card">
          <img src="{{ asset('assets/images/avatar/avatar-4.jpg') }}" alt="Head of Academics">
          <h5>Mr. Imran Siddiqui</h5>
          <span>Head of Academics</span>
          <p>Oversees curriculum design and teacher training programs to maintain the highest academic standards.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="team-card">
          <img src="{{ asset('assets/images/avatar/avatar-5.jpg') }}" alt="Student Counselor">
          <h5>Ms. Sunita Rao</h5>
          <span>Student Counselor</span>
          <p>Dedicated to student well-being, career guidance, and building a positive school culture for all learners.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="team-card">
          <img src="{{ asset('assets/images/avatar/avatar-6.jpg') }}" alt="Admin Manager">
          <h5>Mr. Arjun Mehta</h5>
          <span>Admin Manager</span>
          <p>Manages school operations, fee systems, and parent communications with efficiency and transparency.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end team section -->
@endsection
