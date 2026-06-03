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
  
  /* Key Highlights */
  .key-highlights { margin-top: 20px; }
  .highlight-list { list-style: none; padding: 0; margin: 0; }
  .highlight-list li { padding: 5px 0; color: #444; font-weight: 500; }
  .highlight-list li:before { content: ""; margin-right: 8px; }
  
  /* Stats Animation */
  .stats_section .stat-box h3.counter { transition: all 0.3s ease; }
  .stats_section .stat-box:hover h3 { transform: scale(1.1); }
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
  .team_section .team-card { text-align: center; padding: 30px 20px; border-radius: 12px; box-shadow: 0 4px 25px rgba(0,0,0,0.09); margin-bottom: 30px; transition: transform 0.3s, box-shadow 0.3s; background: #fff; height: calc(100% - 30px); display: flex; flex-direction: column; align-items: center; }
  .team_section .team-card:hover { transform: translateY(-6px); box-shadow: 0 10px 35px rgba(0,0,0,0.13); }
  .team_section .team-card .avatar-wrapper { position: relative; margin-bottom: 18px; }
  .team_section .team-card .avatar-wrapper img { width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 4px solid #fe4801; display: block; }
  .team_section .team-card .avatar-wrapper::after { content: ''; position: absolute; inset: -5px; border-radius: 50%; border: 2px dashed rgba(254,72,1,0.3); }
  .team_section .team-card h5 { font-weight: 700; color: #022f4a; margin-bottom: 4px; font-size: 1.05rem; }
  .team_section .team-card .role-badge { display: inline-block; background: rgba(254,72,1,0.1); color: #fe4801; font-size: 0.8rem; font-weight: 600; padding: 3px 12px; border-radius: 20px; margin-bottom: 14px; }
  .team_section .team-card .team-social { display: flex; gap: 8px; justify-content: center; margin-top: auto; }
  .team_section .team-card .team-social a { width: 32px; height: 32px; border-radius: 50%; background: #f0f4f8; color: #022f4a; display: flex; align-items: center; justify-content: center; transition: background 0.3s, color 0.3s; text-decoration: none; font-size: 0.78rem; }
  .team_section .team-card .team-social a:hover { background: #fe4801; color: #fff; }
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
    <h1>About <span style="color:#fe4801;">1Edge Innovation </span></h1>
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
          <h2>Transforming Education Through <span>Innovation</span></h2>
          <p>
            <strong>1Edge Innovation</strong> is a pioneering technology company specializing in comprehensive school management solutions. 
            Founded with a vision to revolutionize educational administration, we bridge the gap between traditional education 
            systems and cutting-edge technology to create seamless, efficient, and impactful learning environments.
          </p>
          <p>
            Our flagship platform serves as a unified ecosystem that connects students, teachers, parents, and administrators 
            on a single, intelligent system. By streamlining communication channels, automating administrative tasks, and 
            providing real-time insights, we empower educational institutions to focus on their core mission: 
            <strong>delivering exceptional education and nurturing tomorrow's leaders.</strong>
          </p>
          <p>
            With advanced features including AI-powered attendance tracking, comprehensive parent-teacher communication portals, 
            robust online examination systems, detailed analytics dashboards, and cloud-based data management, 
            we serve <strong>hundreds of schools</strong> across the region, impacting thousands of students' educational journeys.
          </p>
          <div class="key-highlights mt-4">
            <div class="row">
              <div class="col-md-6">
                <ul class="highlight-list">
                  <li>✓ Cloud-Based Infrastructure</li>
                  <li>✓ Real-Time Data Analytics</li>
                  <li>✓ Mobile-Responsive Design</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="highlight-list">
                  <li>✓ 24/7 Technical Support</li>
                  <li>✓ Secure Data Management</li>
                  <li>✓ Scalable Solutions</li>
                </ul>
              </div>
            </div>
          </div>
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
      @foreach($stats as $stat)
      <div class="col-md-3 col-6">
        <div class="stat-box">
          <h3 class="counter" data-target="{{ preg_replace('/[^0-9]/', '', $stat->value) }}">{{ $stat->value }}</h3>
          <p>{{ $stat->title }}</p>
        </div>
      </div>
      @endforeach
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
            <h5>Code Excellence & Best Practices</h5>
            <p>We follow Laravel's elegant conventions, SOLID principles, and clean architecture patterns to deliver maintainable, scalable, and robust educational management systems.</p>
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
            <h5>Agile Development & Continuous Integration</h5>
            <p>We leverage modern DevOps practices, automated testing (PHPUnit, Laravel Dusk), and CI/CD pipelines to ensure rapid, reliable software delivery and deployment.</p>
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
            <h5>Performance Optimization & Scalability</h5>
            <p>Using Laravel's caching mechanisms (Redis, Memcached), database optimization, queue systems, and horizontal scaling strategies to handle growing educational institutions.</p>
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
            <h5>Security-First Architecture</h5>
            <p>Implementing Laravel's built-in security features, OAuth 2.0, JWT authentication, CSRF protection, SQL injection prevention, and data encryption to safeguard sensitive educational data.</p>
          </div>
        </div>
        <div class="value-box">
          <div class="v-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22 6 12 13 2 6"></polyline>
            </svg>
          </div>
          <div>
            <h5>API-First Development</h5>
            <p>Building RESTful APIs with Laravel Sanctum, comprehensive API documentation, rate limiting, and version control to enable seamless third-party integrations and mobile applications.</p>
          </div>
        </div>
        <div class="value-box">
          <div class="v-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
              <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
          </div>
          <div>
            <h5>Cloud-Native Solutions</h5>
            <p>Deploying on AWS/Digital Ocean with Laravel Forge, implementing microservices architecture, containerization (Docker), and leveraging cloud services for maximum reliability and uptime.</p>
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
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="team-card">
          <div class="avatar-wrapper">
            <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt="CEO">
          </div>
          <h5>Mr. Taimur Khan</h5>
          <span class="role-badge">CEO</span>
          <div class="team-social">
            <a href="#" title="LinkedIn"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
            <a href="#" title="Email"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="team-card">
          <div class="avatar-wrapper">
            <img src="{{ asset('assets/images/avatar/avatar-44.jpg') }}" alt="MD">
          </div>
          <h5>Mr. Abdullah</h5>
          <span class="role-badge">MD</span>
          <div class="team-social">
            <a href="#" title="LinkedIn"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
            <a href="#" title="Email"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="team-card">
          <div class="avatar-wrapper">
            <img src="{{ asset('assets/images/avatar/avatar-3.jpg') }}" alt="Team Lead">
          </div>
          <h5>Mr. Hamza</h5>
          <span class="role-badge">Team Lead</span>
          <div class="team-social">
            <a href="#" title="LinkedIn"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
            <a href="#" title="Email"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="team-card">
          <div class="avatar-wrapper">
            <img src="{{ asset('assets/images/avatar/avatar-4.jpeg') }}" alt="Head of Academics">
          </div>
          <h5>Mr. Shahnawaz</h5>
          <span class="role-badge">Developer</span>
          <div class="team-social">
            <a href="#" title="LinkedIn"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
            <a href="#" title="Email"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="team-card">
          <div class="avatar-wrapper">
            <img src="{{ asset('assets/images/avatar/avatar-5.jpg') }}" alt="Student Counselor">
          </div>
          <h5>Mr. Imran</h5>
          <span class="role-badge">Developer</span>
          <div class="team-social">
            <a href="#" title="LinkedIn"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
            <a href="#" title="Email"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end team section -->
@endsection

@push('scripts')
<script>
// Counter Animation
function animateCounters() {
    const counters = document.querySelectorAll('.counter');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target')) || 0;
        const originalText = counter.textContent;
        let current = 0;
        const increment = target / 100;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                counter.textContent = originalText;
                clearInterval(timer);
            } else {
                // Extract suffix from original text (like +, %, etc.)
                const suffix = originalText.replace(/[0-9]/g, '').replace(/^[0-9]+/, '');
                counter.textContent = Math.ceil(current) + suffix;
            }
        }, 20);
    });
}

// Intersection Observer for counter animation
function setupCounterObserver() {
    const statsSection = document.querySelector('.stats_section');
    if (!statsSection) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    observer.observe(statsSection);
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    setupCounterObserver();
});
</script>
@endpush
