@extends('layouts.app')

@section('title', '1Hospital | 1Edge Hospital Management System')
@section('body_class', 'sub_page')

@push('styles')
<style>
    .product_hero {
        background: linear-gradient(135deg, #044964 0%, #025370 100%);
        padding: 80px 0 60px;
        text-align: center;
        color: #fff;
    }
    .product_hero h1 { font-size: 2.8rem; font-weight: 700; margin-bottom: 15px; }
    .product_hero p { font-size: 1.1rem; max-width: 620px; margin: 0 auto 30px; opacity: .88; }
    .product_hero .btn-demo {
        display: inline-block; background: #fe4801; color: #fff;
        padding: 13px 36px; border-radius: 4px; font-weight: 700;
        text-decoration: none; transition: background .3s;
    }
    .product_hero .btn-demo:hover { background: #d93d00; color: #fff; }

    .sec-heading { text-align: center; margin-bottom: 50px; }
    .sec-heading h2 { font-size: 2rem; font-weight: 700; color: #022f4a; }
    .sec-heading p { color: #555; max-width: 580px; margin: 10px auto 0; }
    .sec-heading span.line { display: block; width: 60px; height: 3px; background: #fe4801; margin: 12px auto 0; }

    .features_section { padding: 75px 0; background: #f8f9fa; }
    .feature-card {
        background: #fff; border-radius: 10px; padding: 30px 25px;
        text-align: center; margin-bottom: 30px; border: 1px solid #e8e8e8;
        transition: all .3s; height: 100%;
    }
    .feature-card:hover { border-color: #fe4801; box-shadow: 0 10px 30px rgba(254,72,1,.15); transform: translateY(-6px); }
    .feature-card .feat-icon {
        width: 65px; height: 65px; background: #fff3ee; border-radius: 50%;
        display: flex; align-items: center; justify-content: center; margin: 0 auto 18px;
    }
    .feature-card .feat-icon svg { width: 30px; height: 30px; stroke: #fe4801; }
    .feature-card h5 { font-weight: 700; color: #022f4a; margin-bottom: 8px; }
    .feature-card p { color: #666; font-size: .93rem; margin: 0; }

    .overview_section { padding: 75px 0; }
    .overview_section img { border-radius: 10px; box-shadow: 0 10px 40px rgba(0,0,0,.12); }
    .overview_section h2 { font-size: 2rem; font-weight: 700; color: #022f4a; margin-bottom: 15px; }
    .overview_section p { color: #555; margin-bottom: 20px; }
    .overview_section ul { list-style: none; padding: 0; }
    .overview_section ul li { padding: 6px 0; color: #555; font-size: .95rem; }
    .overview_section ul li::before { content: "✓ "; color: #fe4801; font-weight: 700; }

    .cta_section {
        background: linear-gradient(135deg, #fe4801 0%, #ff6a35 100%);
        padding: 70px 0; text-align: center; color: #fff;
    }
    .cta_section h2 { font-size: 2rem; font-weight: 700; margin-bottom: 15px; }
    .cta_section p { font-size: 1.05rem; max-width: 560px; margin: 0 auto 30px; opacity: .92; }
    .cta_section .btn-white {
        display: inline-block; background: #fff; color: #fe4801;
        padding: 13px 38px; border-radius: 4px; font-weight: 700;
        text-decoration: none; margin: 0 8px 10px; transition: all .3s;
    }
    .cta_section .btn-white:hover { background: #022f4a; color: #fff; }

    @media (max-width: 767px) {
        .product_hero { padding: 55px 0 40px; }
        .product_hero h1 { font-size: 2rem; }
        .overview_section { padding: 55px 0; }
        .overview_section h2 { font-size: 1.6rem; }
        .features_section { padding: 55px 0; }
        .sec-heading h2 { font-size: 1.6rem; }
        .cta_section { padding: 55px 0; }
        .cta_section h2 { font-size: 1.6rem; }
    }

    @media (max-width: 575px) {
        .product_hero h1 { font-size: 1.7rem; }
        .product_hero p { font-size: 0.9rem; }
        .overview_section h2 { font-size: 1.4rem; }
        .sec-heading h2 { font-size: 1.4rem; }
        .cta_section h2 { font-size: 1.4rem; }
    }
</style>
@endpush

@section('content')

{{-- Hero --}}
<section class="product_hero">
    <div class="container">
        <h1>1Hospital</h1>
        <p>A complete hospital management system that streamlines patient care, operations, and administration on one powerful platform.</p>
        <a href="{{ route('contact') }}" class="btn-demo">Request a Demo</a>
    </div>
</section>

{{-- Overview --}}
<section class="overview_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/1hospital-overview.png') }}" alt="1Hospital Overview" class="img-fluid"
                     onerror="this.style.background='#e8f4f8';this.style.minHeight='300px';this.removeAttribute('onerror')">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2>Everything Your Hospital Needs</h2>
                <p>1Hospital is a cloud-based hospital management platform designed for clinics and hospitals of all sizes. Manage patients, staff, billing, and reports from one place.</p>
                <ul>
                    <li>Patient registration & appointment scheduling</li>
                    <li>Doctor & staff management</li>
                    <li>In-patient & out-patient records</li>
                    <li>Pharmacy & inventory management</li>
                    <li>Billing & insurance processing</li>
                    <li>Lab & diagnostic report management</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Features --}}
<section class="features_section">
    <div class="container">
        <div class="sec-heading">
            <h2>Key Features</h2>
            <p>Powerful tools built for doctors, nurses, administrators, and patients.</p>
            <span class="line"></span>
        </div>
        <div class="row">
            @php
            $features = [
                ['title' => 'Patient Management',   'desc' => 'Register patients, maintain medical history, and track every visit with ease.', 'icon' => 'users'],
                ['title' => 'Appointment Booking',  'desc' => 'Online and walk-in appointment scheduling with automated reminders.', 'icon' => 'calendar'],
                ['title' => 'Billing & Payments',   'desc' => 'Generate invoices, process insurance claims, and track payments in real time.', 'icon' => 'credit-card'],
                ['title' => 'Lab & Diagnostics',    'desc' => 'Manage test orders, upload reports, and share results directly with patients.', 'icon' => 'file-text'],
                ['title' => 'Pharmacy Management',  'desc' => 'Track medicine inventory, manage prescriptions, and prevent stock shortages.', 'icon' => 'box'],
                ['title' => 'Reports & Analytics',  'desc' => 'Comprehensive dashboards for hospital performance, revenue, and patient trends.', 'icon' => 'bar-chart-2'],
            ];
            $icons = [
                'users'       => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
                'calendar'    => '<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>',
                'credit-card' => '<rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/>',
                'file-text'   => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>',
                'box'         => '<polyline points="21 8 21 21 3 21 3 8"/><rect x="1" y="3" width="22" height="5"/><line x1="10" y1="12" x2="14" y2="12"/>',
                'bar-chart-2' => '<line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/>',
            ];
            @endphp
            @foreach($features as $f)
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <div class="feat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            {!! $icons[$f['icon']] !!}
                        </svg>
                    </div>
                    <h5>{{ $f['title'] }}</h5>
                    <p>{{ $f['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="cta_section">
    <div class="container">
        <h2>Ready to Modernise Your Hospital?</h2>
        <p>Join clinics and hospitals already using 1Hospital to deliver better care and run smoother operations.</p>
        <a href="{{ route('contact') }}" class="btn-white">Get Started Today</a>
    </div>
</section>

@endsection
