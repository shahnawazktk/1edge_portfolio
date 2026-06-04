@extends('layouts.app')

@section('title', 'Home - 1Edge Innovation')

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
            width: 100%;
        }

        .slider_section>.container {
            max-width: 1140px;
            padding: 0 30px;
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

        .img-box {
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            border: 2px dotted #fff;
            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            color: #fff;
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
            max-width: 580px;
            margin: 0 auto;
            padding: 0;
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
        .school_stats {
            background-color: #f8f9fa;
            padding: 60px 0;
        }

        .school_stats .stat-box {
            text-align: center;
            padding: 30px 20px;
            transition: transform 0.3s ease;
        }

        .school_stats .stat-box:hover {
            transform: translateY(-5px);
        }

        .school_stats .stat-box h3 {
            font-size: 2.8rem;
            font-weight: bold;
            color: #fe4801;
            margin-bottom: 10px;
        }

        .school_stats .stat-box p {
            color: #0c2f44ff;
            font-weight: 600;
            margin: 0;
            font-size: 1rem;
        }

        /* Stats Responsive */
        @media (max-width: 991px) {
            .school_stats {
                padding: 50px 0;
            }

            .school_stats .stat-box h3 {
                font-size: 2.2rem;
            }

            .school_stats .stat-box p {
                font-size: 0.95rem;
            }
        }

        @media (max-width: 767px) {
            .school_stats {
                padding: 40px 0;
            }

            .school_stats .stat-box {
                padding: 25px 15px;
                margin-bottom: 20px;
            }

            .school_stats .stat-box h3 {
                font-size: 1.8rem;
            }

            .school_stats .stat-box p {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 575px) {
            .school_stats .stat-box h3 {
                font-size: 1.5rem;
            }

            .school_stats .stat-box p {
                font-size: 0.85rem;
            }
        }

        /* Programs section */
        .programs_section {
            padding: 75px 0;
            background: #fff;
        }

        .programs_section .sec-title {
            text-align: center;
            margin-bottom: 45px;
        }

        .programs_section .sec-title h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #022f4a;
        }

        .programs_section .sec-title p {
            color: #666;
            max-width: 560px;
            margin: 10px auto 0;
        }

        .programs_section .program-card {
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 35px 25px;
            text-align: center;
            transition: all 0.3s ease;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .programs_section .program-card:hover {
            border-color: #fe4801;
            box-shadow: 0 10px 30px rgba(254, 72, 1, 0.12);
            transform: translateY(-6px);
        }

        .programs_section .program-card .icon {
            width: 70px;
            height: 70px;
            background: #fff3ee;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            flex-shrink: 0;
        }

        .programs_section .program-card .icon svg {
            width: 32px;
            height: 32px;
            stroke: #fe4801;
        }

        .programs_section .program-card h5 {
            font-weight: 700;
            color: #022f4a;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .programs_section .program-card p {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.6;
            flex-grow: 1;
            margin-bottom: 0;
        }

        .card-arrow-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #fe4801;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            margin-top: 20px;
            transition: gap 0.25s ease, color 0.25s ease;
        }

        .card-arrow-link:hover {
            gap: 10px;
            color: #c93900;
        }

        .card-arrow-link svg {
            width: 18px;
            height: 18px;
            stroke: currentColor;
            flex-shrink: 0;
        }

        /* Programs Responsive */
        @media (max-width: 991px) {
            .programs_section {
                padding: 60px 0;
            }

            .programs_section .sec-title h2 {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 767px) {
            .programs_section {
                padding: 50px 0;
            }

            .programs_section .sec-title {
                margin-bottom: 30px;
            }

            .programs_section .sec-title h2 {
                font-size: 1.5rem;
            }

            .programs_section .program-card {
                padding: 28px 18px;
            }
        }

        @media (max-width: 575px) {
            .programs_section .sec-title h2 {
                font-size: 1.35rem;
            }

            .programs_section .program-card .icon {
                width: 58px;
                height: 58px;
            }
        }

        /* Feature Section Responsive */
        .feature_section {
            padding: 60px 0;
        }

        .feature_section .box {
            text-align: center;
            padding: 30px 20px;
            transition: all 0.3s;
            margin-bottom: 30px;
        }

        .feature_section .box:hover {
            transform: translateY(-5px);
        }

        .feature_section .box .img-box {
            margin-bottom: 20px;
        }

        .feature_section .box .detail-box h5 {
            font-weight: 700;
            color: #f3f6f8ff;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .feature_section .box .detail-box p {
            color: #f8f9fa;
            font-size: 0.95rem;
        }

        @media (max-width: 767px) {
            .feature_section {
                padding: 50px 0;
            }

            .feature_section .box {
                padding: 25px 15px;
            }

            .feature_section .box .img-box svg {
                width: 48px;
                height: 48px;
            }

            .feature_section .box .detail-box h5 {
                font-size: 1.1rem;
            }

            .feature_section .box .detail-box p {
                font-size: 0.9rem;
            }
        }

        /* Find Section Responsive */
        .find_section {
            padding: 50px 0;
        }

        @media (max-width: 767px) {
            .find_section {
                padding: 40px 0;
            }

            .find_section .text-center {
                padding: 35px 25px !important;
            }

            .find_section h2 {
                font-size: 1.5rem !important;
            }

            .find_section p {
                font-size: 1rem !important;
            }
        }
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
                            <p>We deliver innovative IT solutions and cutting-edge products that empower businesses to
                                thrive in the digital age.</p>
                            <div>
                                <a href="{{ url('/product') }}" class="btn btn-primary">Explore Products</a>
                                <a href="{{ url('/service') }}" class="btn btn-outline-primary">Our Services</a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side Image -->
                    <div
                        class="col-lg-6 col-md-12 text-center mt-4 mt-lg-0 d-flex align-items-center justify-content-center">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/working_01.jpg') }}" alt="1Edge Technologies"
                                class="img-fluid">
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
                    <div class="text-center"
                        style="background: #fff; padding: 50px 40px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                        <h2 style="font-size: 2rem; font-weight: 700; color: #022f4a; margin-bottom: 15px;">Why Choose
                            1Edge?</h2>
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="feature-icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                            </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="feature-icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="feature-icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                            </svg>
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
                @forelse($stats as $stat)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="stat-box">
                            <h3>{{ $stat->value }}</h3>
                            <p>{{ $stat->title }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No statistics available at the moment.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- end stats section -->

    <!-- programs section -->
    <section class="programs_section">
        <div class="container">
            <div class="sec-title">
                <h2>Smart Management Solutions</h2>
                <p> At 1Edge, we specialize in innovative software solutions for School Management, Hospital Management,
                    Station Management, and beyond—helping organizations digitize processes, improve control, and enhance
                    productivity.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 col-12 d-flex">
                    <div class="program-card">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                            </svg>
                        </div>
                        <h5>1School</h5>
                        <p>A complete system to manage students, teachers, attendance, exams, and overall academic
                            operations efficiently.</p>
                        <a href="{{ route('product.1school') }}" class="card-arrow-link">
                            Learn More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <polyline points="12 5 19 12 12 19" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 d-flex">
                    <div class="program-card">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 22V6a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path>
                                <path d="M3 22h12"></path>
                                <path d="M9 6v4"></path>
                                <path d="M17 5h1a2 2 0 0 1 2 2v3a2 2 0 0 0 2 2h0v6a2 2 0 0 1-2 2h-1"></path>
                                <rect x="5" y="10" width="8" height="4" rx="1"></rect>
                            </svg>
                        </div>
                        <h5>1Station</h5>
                        <p>A smart solution to manage fuel sales, stock, billing, and reporting for smooth and efficient
                            station operations.</p>
                        <a href="{{ route('product.1station') }}" class="card-arrow-link">
                            Learn More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <polyline points="12 5 19 12 12 19" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 d-flex">
                    <div class="program-card">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                            <path d="M12 8v8"></path>
                            <path d="M8 12h8"></path>
                        </svg>
                        </div>
                        <h5>1Hospital</h5>
                        <p>An integrated solution for managing patient records, appointments, billing, and hospital
                            workflows in one system.</p>
                        <a href="{{ route('product.1hospital') }}" class="card-arrow-link">
                            Learn More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <polyline points="12 5 19 12 12 19" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 d-flex">
                    <div class="program-card">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"></path>
                            <path d="M7 2v20"></path>
                            <path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3zm0 0v7"></path>
                        </svg>
                        </div>
                        <h5>1Dine</h5>
                        <p>An integrated solution for managing restaurant operations, including orders, inventory, and customer management.</p>
                        <a href="{{ route('product.1dine') }}" class="card-arrow-link">
                            Learn More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <polyline points="12 5 19 12 12 19" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end programs section -->
@endsection
