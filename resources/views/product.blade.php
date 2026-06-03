@extends('layouts.app')

@section('title', 'Products | 1Edge School System')
@section('body_class', 'sub_page')

@push('styles')
    <style>
        /* ===== PAGE HERO ===== */
        .product_hero {
            background: linear-gradient(135deg, #044964 0%, #025370 100%);
            padding: 80px 0 60px;
            text-align: center;
            color: #fff;
        }

        .product_hero h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .product_hero p {
            font-size: 1.1rem;
            max-width: 620px;
            margin: 0 auto 30px;
            opacity: .88;
        }

        .product_hero .btn-demo {
            display: inline-block;
            background: #fe4801;
            color: #fff;
            padding: 13px 36px;
            border-radius: 4px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            transition: background .3s;
        }

        .product_hero .btn-demo:hover {
            background: #d93d00;
            color: #fff;
        }

        /* ===== SECTION HEADING ===== */
        .sec-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .sec-heading h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #022f4a;
        }

        .sec-heading p {
            color: #555;
            max-width: 580px;
            margin: 10px auto 0;
        }

        .sec-heading span.line {
            display: block;
            width: 60px;
            height: 3px;
            background: #fe4801;
            margin: 12px auto 0;
        }

        /* ===== MODULE CARDS ===== */
        .modules_section {
            padding: 75px 0;
            background: #f8f9fa;
        }

        .module-card {
            background: #fff;
            border-radius: 10px;
            padding: 35px 25px;
            text-align: center;
            margin-bottom: 30px;
            border: 1px solid #e8e8e8;
            transition: all .3s;
            height: 100%;
        }

        .module-card:hover {
            border-color: #fe4801;
            box-shadow: 0 10px 30px rgba(254, 72, 1, .15);
            transform: translateY(-6px);
        }

        .module-card .mod-icon {
            width: 70px;
            height: 70px;
            background: #fff3ee;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .module-card .mod-icon svg {
            width: 32px;
            height: 32px;
            stroke: #fe4801;
        }

        .module-card h5 {
            font-weight: 700;
            color: #022f4a;
            margin-bottom: 10px;
        }

        .module-card p {
            color: #666;
            font-size: .93rem;
            margin: 0 0 18px;
        }

        .card-arrow-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #fe4801;
            font-size: .88rem;
            font-weight: 700;
            text-decoration: none;
            transition: gap .2s;
        }

        .card-arrow-link svg {
            width: 16px;
            height: 16px;
            stroke: #fe4801;
            transition: transform .2s;
        }

        .card-arrow-link:hover {
            color: #d93d00;
            gap: 10px;
        }

        .card-arrow-link:hover svg {
            transform: translateX(3px);
        }

        /* ===== HOW IT WORKS ===== */
        .how_section {
            padding: 75px 0;
        }

        .step-box {
            text-align: center;
            padding: 20px;
        }

        .step-box .step-num {
            width: 56px;
            height: 56px;
            background: #fe4801;
            color: #fff;
            border-radius: 50%;
            font-size: 1.4rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
        }

        .step-box h5 {
            font-weight: 700;
            color: #022f4a;
        }

        .step-box p {
            color: #666;
            font-size: .93rem;
        }

        /* ===== PRICING ===== */
        .pricing_section {
            padding: 75px 0;
            background: #f8f9fa;
        }

        .price-card {
            background: #fff;
            border-radius: 10px;
            border: 2px solid #e8e8e8;
            padding: 40px 30px;
            text-align: center;
            margin-bottom: 30px;
            transition: all .3s;
            position: relative;
        }

        .price-card.popular {
            border-color: #fe4801;
        }

        .price-card.popular .badge-popular {
            position: absolute;
            top: -14px;
            left: 50%;
            transform: translateX(-50%);
            background: #fe4801;
            color: #fff;
            padding: 4px 18px;
            border-radius: 20px;
            font-size: .78rem;
            font-weight: 700;
        }

        .price-card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, .1);
            transform: translateY(-5px);
        }

        .price-card h4 {
            font-weight: 700;
            color: #022f4a;
            margin-bottom: 5px;
        }

        .price-card .price-amount {
            font-size: 2.6rem;
            font-weight: 700;
            color: #fe4801;
        }

        .price-card .price-amount span {
            font-size: 1rem;
            color: #888;
            font-weight: 400;
        }

        .price-card ul {
            list-style: none;
            padding: 0;
            margin: 20px 0 30px;
            text-align: left;
        }

        .price-card ul li {
            padding: 7px 0;
            color: #555;
            font-size: .93rem;
            border-bottom: 1px solid #f0f0f0;
        }

        .price-card ul li::before {
            content: "✓ ";
            color: #fe4801;
            font-weight: 700;
        }

        .price-card .btn-plan {
            display: block;
            background: #022f4a;
            color: #fff;
            padding: 12px;
            border-radius: 5px;
            font-weight: 700;
            text-decoration: none;
            transition: background .3s;
        }

        .price-card.popular .btn-plan {
            background: #fe4801;
        }

        .price-card .btn-plan:hover {
            background: #fe4801;
            color: #fff;
        }

        .price-card.popular .btn-plan:hover {
            background: #d93d00;
        }

        /* ===== DEMO CTA ===== */
        .demo_section {
            background: linear-gradient(135deg, #fe4801 0%, #ff6a35 100%);
            padding: 70px 0;
            text-align: center;
            color: #fff;
        }

        .demo_section h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .demo_section p {
            font-size: 1.05rem;
            max-width: 560px;
            margin: 0 auto 30px;
            opacity: .92;
        }

        .demo_section .btn-white {
            display: inline-block;
            background: #fff;
            color: #fe4801;
            padding: 13px 38px;
            border-radius: 4px;
            font-weight: 700;
            text-decoration: none;
            margin: 0 8px 10px;
            transition: all .3s;
        }

        .demo_section .btn-outline-white {
            display: inline-block;
            border: 2px solid #fff;
            color: #fff;
            padding: 11px 36px;
            border-radius: 4px;
            font-weight: 700;
            text-decoration: none;
            margin: 0 8px 10px;
            transition: all .3s;
        }

        .demo_section .btn-white:hover {
            background: #022f4a;
            color: #fff;
        }

        .demo_section .btn-outline-white:hover {
            background: #fff;
            color: #fe4801;
        }

        /* ===== TESTIMONIALS ===== */
        .testimonial_section {
            padding: 75px 0;
        }

        .testi-card {
            background: #fff;
            border-radius: 10px;
            border: 1px solid #e8e8e8;
            padding: 30px 25px;
            margin-bottom: 30px;
        }

        .testi-card p {
            color: #555;
            font-style: italic;
            margin-bottom: 20px;
        }

        .testi-card .testi-author {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .testi-card .testi-author img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
        }

        .testi-card .testi-author h6 {
            margin: 0;
            font-weight: 700;
            color: #022f4a;
        }

        .testi-card .testi-author small {
            color: #888;
        }

        .stars {
            color: #fe4801;
            font-size: 1rem;
            margin-bottom: 12px;
        }

        /* ===== RESPONSIVE DESIGN ===== */

        /* Tablets (768px - 991px) */
        @media (max-width: 991px) {
            .product_hero h1 {
                font-size: 2.3rem;
            }

            .product_hero p {
                font-size: 1rem;
            }

            .sec-heading h2 {
                font-size: 1.8rem;
            }

            .module-card {
                padding: 30px 20px;
            }

            .price-card {
                padding: 35px 25px;
            }
        }

        /* Mobile (576px - 767px) */
        @media (max-width: 767px) {
            .product_hero {
                padding: 60px 0 40px;
            }

            .product_hero h1 {
                font-size: 2rem;
            }

            .product_hero p {
                font-size: 0.95rem;
                padding: 0 15px;
            }

            .product_hero .btn-demo {
                padding: 11px 28px;
                font-size: 0.95rem;
            }

            .modules_section {
                padding: 60px 0;
            }

            .sec-heading {
                margin-bottom: 40px;
            }

            .sec-heading h2 {
                font-size: 1.6rem;
            }

            .sec-heading p {
                font-size: 0.9rem;
            }

            .module-card {
                padding: 28px 20px;
                margin-bottom: 25px;
            }

            .module-card .mod-icon {
                width: 60px;
                height: 60px;
                margin-bottom: 15px;
            }

            .module-card .mod-icon svg {
                width: 28px;
                height: 28px;
            }

            .module-card h5 {
                font-size: 1.05rem;
            }

            .module-card p {
                font-size: 0.9rem;
            }

            .how_section {
                padding: 60px 0;
            }

            .step-box {
                padding: 15px;
            }

            .step-box .step-num {
                width: 50px;
                height: 50px;
                font-size: 1.3rem;
                margin-bottom: 15px;
            }

            .step-box h5 {
                font-size: 1.05rem;
            }

            .pricing_section {
                padding: 60px 0;
            }

            .price-card {
                padding: 30px 20px;
                margin-bottom: 25px;
            }

            .price-card h4 {
                font-size: 1.3rem;
            }

            .price-card .price-amount {
                font-size: 2.2rem;
            }

            .demo_section {
                padding: 60px 0;
            }

            .demo_section h2 {
                font-size: 1.8rem;
            }

            .demo_section p {
                font-size: 1rem;
            }

            .testimonial_section {
                padding: 60px 0;
            }

            .testi-card {
                padding: 25px 20px;
            }
        }

        /* Small Mobile (up to 575px) */
        @media (max-width: 575px) {
            .product_hero {
                padding: 50px 0 35px;
            }

            .product_hero h1 {
                font-size: 1.7rem;
            }

            .product_hero p {
                font-size: 0.9rem;
            }

            .product_hero .btn-demo {
                padding: 10px 24px;
                font-size: 0.9rem;
            }

            .modules_section {
                padding: 50px 0;
            }

            .sec-heading h2 {
                font-size: 1.4rem;
            }

            .sec-heading p {
                font-size: 0.85rem;
            }

            .sec-heading span.line {
                width: 50px;
                height: 2px;
            }

            .module-card {
                padding: 25px 18px;
            }

            .module-card .mod-icon {
                width: 55px;
                height: 55px;
            }

            .module-card .mod-icon svg {
                width: 26px;
                height: 26px;
            }

            .module-card h5 {
                font-size: 1rem;
            }

            .module-card p {
                font-size: 0.88rem;
            }

            .how_section {
                padding: 50px 0;
            }

            .step-box .step-num {
                width: 45px;
                height: 45px;
                font-size: 1.2rem;
            }

            .step-box h5 {
                font-size: 1rem;
            }

            .step-box p {
                font-size: 0.88rem;
            }

            .pricing_section {
                padding: 50px 0;
            }

            .price-card {
                padding: 28px 18px;
            }

            .price-card h4 {
                font-size: 1.2rem;
            }

            .price-card .price-amount {
                font-size: 2rem;
            }

            .price-card ul li {
                font-size: 0.88rem;
                padding: 6px 0;
            }

            .price-card .btn-plan {
                padding: 11px;
                font-size: 0.95rem;
            }

            .demo_section {
                padding: 50px 0;
            }

            .demo_section h2 {
                font-size: 1.6rem;
            }

            .demo_section p {
                font-size: 0.95rem;
            }

            .demo_section .btn-white,
            .demo_section .btn-outline-white {
                padding: 11px 28px;
                font-size: 0.9rem;
                display: block;
                margin: 0 0 12px 0;
            }

            .testimonial_section {
                padding: 50px 0;
            }

            .testi-card {
                padding: 22px 18px;
            }

            .testi-card p {
                font-size: 0.9rem;
            }

            .testi-card .testi-author img {
                width: 42px;
                height: 42px;
            }

            .testi-card .testi-author h6 {
                font-size: 0.95rem;
            }

            .testi-card .testi-author small {
                font-size: 0.8rem;
            }
        }

        /* Extra Small Mobile (up to 400px) */
        @media (max-width: 400px) {
            .product_hero h1 {
                font-size: 1.5rem;
            }

            .product_hero p {
                font-size: 0.85rem;
            }

            .sec-heading h2 {
                font-size: 1.3rem;
            }

            .module-card {
                padding: 22px 15px;
            }

            .price-card .price-amount {
                font-size: 1.8rem;
            }

            .demo_section h2 {
                font-size: 1.4rem;
            }
        }
    </style>
@endpush

@section('content')
    <!-- ===== PRODUCT HERO ===== -->
    <section class="product_hero">
        <div class="container">
            <h1>Smart Software Solutions for Every Industry</h1>
            <p>
                From schools and hospitals to restaurants — 1Edge builds powerful, easy-to-use platforms
                that simplify operations and drive real results.
            </p>
        </div>
    </section>
    <!-- ===== END PRODUCT HERO ===== -->

    <!-- ===== MODULES SECTION ===== -->
    <section class="modules_section">
        <div class="container">
            <div class="sec-heading">
                <h2>Our Products</h2>
                <span class="line"></span>
                <p>Everything your school needs, built into a single platform. No extra tools required.</p>
            </div>
            <div class="row">

                <!-- Student Management -->
                <div class="col-md-4">
                    <div class="module-card">
                        <div class="mod-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <h5>1 School</h5>
                        <p>Complete student profiles with academic records, attendance history, health info, and
                            co-curricular achievements in one secure place.</p>
                        <a href="{{ route('product.1school') }}" class="card-arrow-link">
                            Learn More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Attendance -->
                <div class="col-md-4">
                    <div class="module-card">
                        <div class="mod-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                        </div>
                        <h5>1 Station</h5>
                        <p>Mark and monitor daily attendance digitally. Auto-alerts to parents when a student is absent,
                            with monthly reports at a click.</p>
                        <a href="{{ route('product.1station') }}" class="card-arrow-link">
                            Learn More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Hospital Management -->
                <div class="col-md-4">
                    <div class="module-card">
                        <div class="mod-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <polyline points="14 2 14 8 20 8" />
                                <line x1="16" y1="13" x2="8" y2="13" />
                                <line x1="16" y1="17" x2="8" y2="17" />
                            </svg>
                        </div>
                        <h5>1Hospital</h5>
                        <p>Manage patients, appointments, billing, pharmacy, and lab reports — all in one integrated hospital management platform.</p>
                        <a href="{{ route('product.1hospital') }}" class="card-arrow-link">
                            Learn More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
                <!-- 1Dine -->
                <div class="col-md-4">
                    <div class="module-card">
                        <div class="mod-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <polyline points="14 2 14 8 20 8" />
                                <line x1="16" y1="13" x2="8" y2="13" />
                                <line x1="16" y1="17" x2="8" y2="17" />
                            </svg>
                        </div>
                        <h5>1Dine</h5>
                        <p>Take orders, manage tables, track kitchen activity, and process payments — all in one smart restaurant management platform.</p>
                        <a href="{{ route('product.1dine') }}" class="card-arrow-link">
                            Learn More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Fee Management -->
                <!-- <div class="col-md-4">
                      <div class="module-card">
                              <div class="mod-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                  <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                                  <line x1="1" y1="10" x2="23" y2="10"/>
                                </svg>
                              </div>
                              <h5>Fee Management</h5>
                            <p>Online fee collection, automated payment reminders, instant receipt generation, and real-time financial dashboards for admins.</p>
                          </div>
                    </div> -->

                <!-- Timetable -->
                <!-- <div class="col-md-4">
            <div class="module-card">
              <div class="mod-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"/>
                  <polyline points="12 6 12 12 16 14"/>
                </svg>
              </div>
              <h5>Timetable Scheduler</h5>
              <p>Auto-generate conflict-free timetables for classes and teachers. Share schedules instantly with staff, students, and parents.</p>
            </div>
          </div> -->

                <!-- Parent Communication -->
                <!-- <div class="col-md-4">
            <div class="module-card">
              <div class="mod-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                </svg>
              </div>
              <h5>Parent Communication</h5>
              <p>Send circulars, homework updates, and progress reports via SMS, email, or the 1Edge parent app — keeping families always informed.</p>
            </div>
          </div> -->

                <!-- Library -->
                <!-- <div class="col-md-4">
            <div class="module-card">
              <div class="mod-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                  <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                </svg>
              </div>
              <h5>Library Management</h5>
              <p>Track book inventory, issue and return records, overdue alerts, and student reading history — all digitally managed.</p>
            </div>
          </div> -->

                <!-- HR & Staff -->
                <!-- <div class="col-md-4">
            <div class="module-card">
              <div class="mod-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                  <circle cx="12" cy="7" r="4"/>
                </svg>
              </div>
              <h5>Staff &amp; HR Module</h5>
              <p>Manage teacher profiles, payroll, leave applications, performance reviews, and staff attendance from one admin panel.</p>
            </div>
          </div> -->

                <!-- Analytics -->
                <!-- <div class="col-md-4">
            <div class="module-card">
              <div class="mod-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <line x1="18" y1="20" x2="18" y2="10"/>
                  <line x1="12" y1="20" x2="12" y2="4"/>
                  <line x1="6" y1="20" x2="6" y2="14"/>
                </svg>
              </div>
              <h5>Analytics &amp; Reports</h5>
              <p>Real-time dashboards for principals and admins. Track school performance, student progress, and financial health at a glance.</p>
            </div>
          </div> -->

            </div><!-- end row -->
        </div>
    </section>
    <!-- ===== END MODULES ===== -->

    <!-- ===== HOW IT WORKS ===== -->
    <section class="how_section">
        <div class="container">
            <div class="sec-heading">
                <h2>How It Works</h2>
                <span class="line"></span>
                <p>Get your school up and running on 1Edge in just 4 simple steps.</p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="step-box">
                        <div class="step-num">1</div>
                        <h5>Request a Demo</h5>
                        <p>Fill out our quick form and our team will schedule a personalised demo for your school.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-box">
                        <div class="step-num">2</div>
                        <h5>Onboarding &amp; Setup</h5>
                        <p>We configure the platform with your school's data — classes, teachers, and students — in 48
                            hours.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-box">
                        <div class="step-num">3</div>
                        <h5>Staff Training</h5>
                        <p>Our trainers conduct live sessions so your staff can use every module with confidence from day
                            one.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-box">
                        <div class="step-num">4</div>
                        <h5>Go Live &amp; Grow</h5>
                        <p>Launch the platform school-wide and enjoy ongoing support, updates, and new features every month.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== END HOW IT WORKS ===== -->

    <!-- ===== PRICING ===== -->
    <section class="pricing_section">
        <div class="container">
            <div class="sec-heading">
                <h2>Simple, Transparent Pricing</h2>
                <span class="line"></span>
                <p>Choose the plan that fits your school size. No hidden charges, ever.</p>
            </div>
            <div class="row justify-content-center">

                <!-- Starter -->
                <div class="col-md-4">
                    <div class="price-card">
                        <h4>Starter</h4>
                        <div class="price-amount">&#8377;999 <span>/ month</span></div>
                        <ul>
                            <li>Up to 200 Students</li>
                            <li>Attendance Tracking</li>
                            <li>Fee Management</li>
                            <li>Basic Timetable</li>
                            <li>Email Support</li>
                        </ul>
                        <a href="{{ url('/contact') }}" class="btn-plan">Get Started</a>
                    </div>
                </div>

                <!-- Growth (Popular) -->
                <div class="col-md-4">
                    <div class="price-card popular">
                        <span class="badge-popular">Most Popular</span>
                        <h4>Growth</h4>
                        <div class="price-amount">&#8377;1,999 <span>/ month</span></div>
                        <ul>
                            <li>Up to 600 Students</li>
                            <li>All Starter Features</li>
                            <li>Online Exams &amp; Results</li>
                            <li>Parent App &amp; SMS Alerts</li>
                            <li>Library Management</li>
                            <li>Priority Support</li>
                        </ul>
                        <a href="{{ url('/contact') }}" class="btn-plan">Get Started</a>
                    </div>
                </div>

                <!-- Premium -->
                <div class="col-md-4">
                    <div class="price-card">
                        <h4>Premium</h4>
                        <div class="price-amount">&#8377;3,499 <span>/ month</span></div>
                        <ul>
                            <li>Unlimited Students</li>
                            <li>All Growth Features</li>
                            <li>HR &amp; Payroll Module</li>
                            <li>Advanced Analytics</li>
                            <li>Custom Branding</li>
                            <li>Dedicated Account Manager</li>
                        </ul>
                        <a href="{{ url('/contact') }}" class="btn-plan">Get Started</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ===== END PRICING ===== -->

    <!-- ===== DEMO CTA ===== -->
    {{-- <section class="demo_section">
  <div class="container">
    <h2>See 1Edge in Action</h2>
    <p>Book a free 30-minute live demo and discover how 1Edge can transform your school's operations today.</p>
    <a href="{{ url('/contact') }}" class="btn-white">Book Free Demo</a>
    <a href="{{ url('/contact') }}" class="btn-outline-white">Talk to Sales</a>
  </div>
</section> --}}
    <!-- ===== END DEMO CTA ===== -->

    <!-- ===== TESTIMONIALS ===== -->
    {{-- <section class="testimonial_section">
  <div class="container">
    <div class="sec-heading">
      <h2>Trusted by Schools Across the Region</h2>
      <span class="line"></span>
      <p>Hear what principals, teachers, and parents say about 1Edge.</p>
    </div>
    <div class="row">

      <div class="col-md-4">
        <div class="testi-card">
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p>"Since adopting 1Edge, our administrative workload dropped by 60%. The analytics dashboard gives me a real-time view of school performance and helps us make better decisions."</p>
          <div class="testi-author">
            <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt="Principal">
            <div>
              <h6>Mrs. Sunita Rao</h6>
              <small>School Principal</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="testi-card">
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p>"Managing attendance, lesson plans, and student reports used to take hours. With 1Edge, everything is automated and I can focus entirely on teaching."</p>
          <div class="testi-author">
            <img src="{{ asset('assets/images/avatar/avatar-2.jpg') }}" alt="Teacher">
            <div>
              <h6>Mr. Rajesh Kumar</h6>
              <small>Class Teacher</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="testi-card">
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p>"1Edge has completely changed how I stay connected with my child's school. I get instant updates on attendance, homework, and exam results right on my phone."</p>
          <div class="testi-author">
            <img src="{{ asset('assets/images/avatar/avatar-3.jpg') }}" alt="Parent">
            <div>
              <h6>Priya Mehta</h6>
              <small>Parent</small>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section> --}}
    <!-- ===== END TESTIMONIALS ===== -->
@endsection
