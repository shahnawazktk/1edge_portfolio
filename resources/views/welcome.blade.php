<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="school, education, management, 1edge" />
  <meta name="description" content="1Edge School System - Smart Education Management" />
  <meta name="author" content="1Edge" />

  <title>1Edge School System</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />

  <style>
    /* ---- 1Edge School overrides ---- */
    .hero_area {
      background: linear-gradient(135deg, #022f4a 0%, #0f3a53 100%);
    }

    /* Slider with overlay on background image */
    .slider_section {
      background-image: url(images/slider-bg.jpg);
      background-size: cover;
      background-position: center;
      position: relative;
    }
    .slider_section::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(2, 47, 74, 0.72);
      z-index: 0;
    }
    .slider_section .carousel,
    .slider_section .carousel-inner,
    .slider_section .carousel-item,
    .slider_section .container,
    .slider_section .detail-box,
    .slider_section ol.carousel-indicators,
    .slider_section .carousel-control-prev,
    .slider_section .carousel-control-next {
      position: relative;
      z-index: 1;
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

    /* CTA Banner */
    .cta_banner {
      background: linear-gradient(135deg, #fe4801 0%, #ff6a35 100%);
      padding: 65px 0;
      text-align: center;
      color: #fff;
    }
    .cta_banner h2 { font-size: 2rem; font-weight: 700; margin-bottom: 12px; }
    .cta_banner p { font-size: 1rem; opacity: 0.92; margin-bottom: 28px; }
    .cta_banner .btn-white {
      display: inline-block;
      background: #fff;
      color: #fe4801;
      padding: 13px 38px;
      border-radius: 4px;
      font-weight: 700;
      text-decoration: none;
      margin: 0 8px 10px;
      transition: all 0.3s;
    }
    .cta_banner .btn-white:hover { background: #022f4a; color: #fff; }
    .cta_banner .btn-outline {
      display: inline-block;
      border: 2px solid #fff;
      color: #fff;
      padding: 11px 36px;
      border-radius: 4px;
      font-weight: 700;
      text-decoration: none;
      margin: 0 8px 10px;
      transition: all 0.3s;
    }
    .cta_banner .btn-outline:hover { background: #fff; color: #fe4801; }

    /* Notice badge */
    .notice-badge {
      display: inline-block;
      background: #fe4801;
      color: #fff;
      font-size: 0.7rem;
      padding: 2px 8px;
      border-radius: 20px;
      margin-left: 6px;
      vertical-align: middle;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <span>1Edge</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="product.html">Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider / hero section -->
    <section class="slider_section">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="detail-box">
                <h1>Transform Your Business with 1Edge Technologies</h1>
                <p>
                  We deliver innovative IT solutions and cutting-edge products that empower businesses to thrive in the digital age.
                </p>
                <div>
                  <a href="contact.html">Explore Products</a>
                </div>
                <div>
                  <a href="contact.html">Our Services</a>
                </div>
              </div>
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
      <form action="">
        <div class="form-row">
          <div class="col-lg-3">
            <label for="schoolSize">School Size</label>
            <select name="" id="schoolSize" class="form-control">
              <option value="">Under 200 Students</option>
              <option value="">200 – 600 Students</option>
              <option value="">600 – 1200 Students</option>
              <option value="">1200+ Students</option>
            </select>
          </div>
          <div class="col-lg-3">
            <label for="schoolName">School Name</label>
            <input type="text" class="form-control" placeholder="e.g. Sunrise Public School" id="schoolName">
          </div>
          <div class="col-lg-3">
            <label for="contactPhone">Your Phone Number</label>
            <input type="text" class="form-control" placeholder="+91 98765 43210" id="contactPhone">
          </div>
          <div class="col-lg-3">
            <div class="btn-container">
              <button type="submit">Request Free Demo</button>
            </div>
          </div>
        </div>
      </form>
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
              <img src="images/money.png" alt="Affordable Plans">
            </div>
            <div class="detail-box">
              <h5>Affordable Plans</h5>
              <p>Starting at just ₹999/month. Transparent pricing with no hidden charges for schools of any size.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/clock.png" alt="Quick Setup">
            </div>
            <div class="detail-box">
              <h5>Setup in 24 Hours</h5>
              <p>Our onboarding team gets your school fully live within 24–48 hours. No technical expertise needed.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/man.png" alt="Dedicated Support">
            </div>
            <div class="detail-box">
              <h5>Dedicated Support</h5>
              <p>Phone, email, and live chat support available. Free training for all staff included with every plan.</p>
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

  <!-- why section -->
  <section class="why_section layout_padding">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>Why Schools Choose 1Edge?</h2>
            </div>
            <p>
              1Edge School System is built for modern schools that want to deliver excellence.
              Our platform integrates academics, administration, communication, and analytics
              into a single, easy-to-use solution trusted by 500+ schools across the region.
            </p>
            <ul style="list-style:none; padding:0; margin-top:15px;">
              <li style="padding:6px 0 6px 28px; position:relative; color:#444;">
                <span style="position:absolute;left:0;color:#fe4801;font-weight:bold;">✔</span>
                Complete Student Lifecycle Management
              </li>
              <li style="padding:6px 0 6px 28px; position:relative; color:#444;">
                <span style="position:absolute;left:0;color:#fe4801;font-weight:bold;">✔</span>
                Real-Time Parent Communication App
              </li>
              <li style="padding:6px 0 6px 28px; position:relative; color:#444;">
                <span style="position:absolute;left:0;color:#fe4801;font-weight:bold;">✔</span>
                Automated Attendance &amp; Timetable
              </li>
              <li style="padding:6px 0 6px 28px; position:relative; color:#444;">
                <span style="position:absolute;left:0;color:#fe4801;font-weight:bold;">✔</span>
                Online Exams with Auto-Grading
              </li>
              <li style="padding:6px 0 6px 28px; position:relative; color:#444;">
                <span style="position:absolute;left:0;color:#fe4801;font-weight:bold;">✔</span>
                Secure Fee Collection &amp; Digital Receipts
              </li>
              <li style="padding:6px 0 6px 28px; position:relative; color:#444;">
                <span style="position:absolute;left:0;color:#fe4801;font-weight:bold;">✔</span>
                Powerful Analytics Dashboard for Principals
              </li>
            </ul>
            <div style="margin-top:20px;">
              <a href="about.html" style="display:inline-block;padding:10px 28px;background:#022f4a;color:#fff;border-radius:4px;font-weight:600;text-decoration:none;margin-right:10px;transition:background 0.3s;">Learn More</a>
              <a href="contact.html" style="display:inline-block;padding:10px 28px;background:#fe4801;color:#fff;border-radius:4px;font-weight:600;text-decoration:none;transition:background 0.3s;">Get Free Demo</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-container">
            <div class="row">
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="images/w-1.jpg" alt="Classroom">
                  <a href=""><img src="images/link.png" alt=""></a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="images/w-2.jpg" alt="Library">
                  <a href=""><img src="images/link.png" alt=""></a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="images/w-3.jpg" alt="Sports">
                  <a href=""><img src="images/link.png" alt=""></a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="images/w-4.jpg" alt="Lab">
                  <a href=""><img src="images/link.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end why section -->

  <!-- service section -->
  <section class="service_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>Our Key Features</h2>
      </div>
      <p>
        1Edge provides a complete suite of tools designed to simplify school operations,
        enhance learning outcomes, and keep every stakeholder connected and informed.
      </p>

      <!-- Feature 1: Student Management -->
      <div class="box">
        <div class="img-box">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
          </svg>
        </div>
        <div class="detail-box">
          <h5>Student Management</h5>
          <p>
            Maintain complete student profiles including academic records, attendance history,
            health information, and co-curricular achievements — all in one secure place.
          </p>
          <div><a href="product.html">Read More</a></div>
        </div>
      </div>

      <!-- Feature 2: Online Examinations -->
      <div class="box">
        <div class="img-box">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
            <polyline points="14 2 14 8 20 8"></polyline>
            <line x1="16" y1="13" x2="8" y2="13"></line>
            <line x1="16" y1="17" x2="8" y2="17"></line>
            <polyline points="10 9 9 9 8 9"></polyline>
          </svg>
        </div>
        <div class="detail-box">
          <h5>Online Examinations</h5>
          <p>
            Conduct secure online tests and exams with auto-grading, instant result publishing,
            and detailed performance analytics for teachers and parents.
          </p>
          <div><a href="product.html">Read More</a></div>
        </div>
      </div>

      <!-- Feature 3: Parent Communication -->
      <div class="box">
        <div class="img-box">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
          </svg>
        </div>
        <div class="detail-box">
          <h5>Parent Communication</h5>
          <p>
            Send instant notifications, circulars, and progress reports directly to parents
            via SMS, email, or the 1Edge mobile app — keeping families always in the loop.
          </p>
          <div><a href="service.html">Read More</a></div>
        </div>
      </div>

      <!-- Feature 4: Fee Management -->
      <div class="box">
        <div class="img-box">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
            <line x1="1" y1="10" x2="23" y2="10"></line>
          </svg>
        </div>
        <div class="detail-box">
          <h5>Fee Management</h5>
          <p>
            Streamline fee collection with online payment gateways, automated reminders,
            receipt generation, and real-time financial reporting for school administrators.
          </p>
          <div><a href="service.html">Read More</a></div>
        </div>
      </div>

    </div>
  </section>
  <!-- end service section -->

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
            <h5>Student Management</h5>
            <p>Complete student profiles, academic records, health data, and co-curricular achievements in one secure database.</p>
          </div>
        </div>
        <div class="col-md-4 d-flex">
          <div class="program-card">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
                <polyline points="9 16 11 18 15 14"></polyline>
              </svg>
            </div>
            <h5>Attendance &amp; Timetable</h5>
            <p>Digital attendance with instant parent alerts. Auto-generate conflict-free timetables for all classes and teachers.</p>
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
            <h5>Fee Management</h5>
            <p>Online payments, automated reminders, digital receipts, and real-time financial reporting for administrators.</p>
          </div>
        </div>
        <div class="col-md-4 d-flex">
          <div class="program-card">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
              </svg>
            </div>
            <h5>Online Exams &amp; Results</h5>
            <p>Conduct secure online tests with auto-grading, instant result publishing, and detailed performance analytics.</p>
          </div>
        </div>
        <div class="col-md-4 d-flex">
          <div class="program-card">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
              </svg>
            </div>
            <h5>Parent Communication</h5>
            <p>Send notifications, circulars, and progress reports via SMS, email, or the 1Edge mobile app instantly.</p>
          </div>
        </div>
        <div class="col-md-4 d-flex">
          <div class="program-card">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="20" x2="18" y2="10"></line>
                <line x1="12" y1="20" x2="12" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="14"></line>
              </svg>
            </div>
            <h5>Analytics &amp; Reports</h5>
            <p>Real-time dashboards for principals. Track school performance, attendance trends, and academic outcomes at a glance.</p>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="product.html" style="display:inline-block;padding:12px 35px;background:#022f4a;color:#fff;border-radius:4px;font-weight:700;text-decoration:none;transition:background 0.3s;">View All Modules</a>
      </div>
    </div>
  </section>
  <!-- end programs section -->

  <!-- CTA Banner -->
  <section class="cta_banner">
    <div class="container">
      <h2>Ready to Transform Your School?</h2>
      <p>Join 500+ schools already using 1Edge to deliver better education outcomes. Get started with a free 14-day trial.</p>
      <a href="contact.html" class="btn-white">Book Free Demo</a>
      <a href="product.html" class="btn-outline">Explore Features</a>
    </div>
  </section>
  <!-- end CTA Banner -->

  <!-- testimonials / client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>What Parents &amp; Teachers Say</h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box"><img src="images/client.png" alt="Parent"></div>
              <div class="detail-box">
                <h6>Priya Mehta — Parent</h6>
                <p>
                  "1Edge has completely changed how I stay connected with my child's school.
                  I get instant updates on attendance, homework, and exam results right on my phone.
                  It's a game-changer for busy parents like me."
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box"><img src="images/client.png" alt="Teacher"></div>
              <div class="detail-box">
                <h6>Mr. Rajesh Kumar — Class Teacher</h6>
                <p>
                  "Managing attendance, lesson plans, and student reports used to take hours.
                  With 1Edge, everything is automated and I can focus entirely on teaching.
                  The platform is intuitive and the support team is excellent."
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box"><img src="images/client.png" alt="Principal"></div>
              <div class="detail-box">
                <h6>Mrs. Sunita Rao — School Principal</h6>
                <p>
                  "Since adopting 1Edge, our administrative workload has dropped by 60%.
                  The analytics dashboard gives me a real-time view of school performance
                  and helps us make better decisions for our students."
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end testimonials section -->

  <!-- pricing / plans section -->
  <section class="rate_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Simple &amp; Transparent Pricing</h2>
      </div>
      <p style="text-align:center; color:#555; max-width:560px; margin:0 auto 10px;">
        Choose the plan that fits your school size. No hidden charges, no long-term lock-in.
      </p>
      <div class="rate_container">
        <div class="box">
          <div class="detail-box">
            <div class="price">
              <h3>&#8377;<span>999</span> /mo</h3>
              <h6>Starter</h6>
            </div>
            <p>Up to 200 students. Attendance, timetable, and fee management included.</p>
          </div>
          <div class="btn-box">
            <a href="contact.html">Get Started</a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <div class="price">
              <h3>&#8377;<span>1,999</span> /mo</h3>
              <h6>Growth <span style="background:#fff;color:#fe4801;font-size:0.65rem;padding:2px 8px;border-radius:20px;margin-left:6px;font-weight:700;">Popular</span></h6>
            </div>
            <p>Up to 600 students. Exams, parent app, reports, SMS alerts &amp; library module.</p>
          </div>
          <div class="btn-box">
            <a href="contact.html">Get Started</a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <div class="price">
              <h3>&#8377;<span>3,499</span> /mo</h3>
              <h6>Premium</h6>
            </div>
            <p>Unlimited students. Full suite with HR module, analytics, custom branding &amp; priority support.</p>
          </div>
          <div class="btn-box">
            <a href="contact.html">Get Started</a>
          </div>
        </div>
      </div>
      <p style="text-align:center; margin-top:25px; color:#888; font-size:0.9rem;">
        All plans include a <strong>14-day free trial</strong>. No credit card required.
      </p>
    </div>
  </section>
  <!-- end pricing section -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Book a Free Demo</h2>
      </div>
      <p style="color:#cde; text-align:center; margin-bottom:10px;">
        Fill in your details and our team will reach out within 24 hours to schedule a personalised demo for your school.
      </p>
      <div class="">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Your Name (Principal / Admin)">
                  </div>
                  <div>
                    <input type="text" placeholder="School Name">
                  </div>
                  <div>
                    <input type="email" placeholder="Email Address">
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number">
                  </div>
                  <div>
                    <input type="text" placeholder="City / State" class="message_input">
                  </div>
                  <div class="mt-5 d-flex justify-content-center">
                    <button type="submit">Book Free Demo →</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info / footer top section -->
  <section class="info_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h6>Stay Updated</h6>
          <p>Subscribe to get the latest news, circulars, and updates from 1Edge School System.</p>
          <form action="">
            <input type="text" placeholder="Enter your email">
            <div class="d-flex justify-content-end">
              <button>Subscribe</button>
            </div>
          </form>
        </div>
        <div class="col-lg-2">
          <h6>Quick Links</h6>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="product.html">Features</a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h6>Resources</h6>
          <ul>
            <li><a href="">Student Portal</a></li>
            <li><a href="">Teacher Portal</a></li>
            <li><a href="">Parent App</a></li>
            <li><a href="">Help Center</a></li>
            <li><a href="">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h6>Programs</h6>
          <ul>
            <li><a href="">Primary School</a></li>
            <li><a href="">Middle School</a></li>
            <li><a href="">High School</a></li>
            <li><a href="">After School</a></li>
            <li><a href="">Online Classes</a></li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h6>Contact Us</h6>
          <div class="info_link-box">
            <a href="">
              <img src="images/location.png" alt="">
              <span>123 School Road, City</span>
            </a>
            <a href="">
              <img src="images/call.png" alt="">
              <span>+91 98765 43210</span>
            </a>
            <a href="">
              <img src="images/envelope.png" alt="">
              <span>info@1edgeschool.com</span>
            </a>
          </div>
          <div class="info_social">
            <div><a href=""><img src="images/fb.png" alt="Facebook"></a></div>
            <div><a href=""><img src="images/twitter.png" alt="Twitter"></a></div>
            <div><a href=""><img src="images/linkedin.png" alt="LinkedIn"></a></div>
            <div><a href=""><img src="images/insta.png" alt="Instagram"></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="#">1Edge School System</a>
    </p>
  </section>
  <!-- end footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
