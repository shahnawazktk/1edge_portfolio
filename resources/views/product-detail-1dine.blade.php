@extends('layouts.app')

@section('title', '1Dine | 1Edge Restaurant Management System')
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
        <h1>1Dine</h1>
        <p>A complete restaurant management system that streamlines orders, tables, billing, and kitchen operations on one smart platform.</p>
        <a href="{{ route('contact') }}" class="btn-demo">Request a Demo</a>
    </div>
</section>

{{-- Overview --}}
<section class="overview_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/1dine-overview.png') }}" alt="1Dine Overview" class="img-fluid"
                     onerror="this.style.background='#e8f4f8';this.style.minHeight='300px';this.removeAttribute('onerror')">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2>Everything Your Restaurant Needs</h2>
                <p>1Dine is a cloud-based restaurant management platform designed for cafes, restaurants, and food chains of all sizes. Manage orders, staff, inventory, and billing from one place.</p>
                <ul>
                    <li>Table & order management</li>
                    <li>Digital menu with real-time updates</li>
                    <li>Kitchen display & order tracking</li>
                    <li>Billing, invoicing & split payments</li>
                    <li>Inventory & stock management</li>
                    <li>Sales reports & analytics dashboard</li>
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
            <p>Powerful tools built for restaurant owners, managers, kitchen staff, and customers.</p>
            <span class="line"></span>
        </div>
        <div class="row">
            @php
            $features = [
                ['title' => 'Table Management',    'desc' => 'Manage table layouts, reservations, and walk-ins with a real-time floor view.', 'icon' => 'grid'],
                ['title' => 'Order Management',    'desc' => 'Take dine-in, takeaway, and delivery orders from one unified interface.', 'icon' => 'clipboard'],
                ['title' => 'Kitchen Display',     'desc' => 'Send orders instantly to the kitchen screen and track preparation status live.', 'icon' => 'monitor'],
                ['title' => 'Billing & Payments',  'desc' => 'Generate bills, apply discounts, split payments, and accept multiple payment methods.', 'icon' => 'credit-card'],
                ['title' => 'Inventory Control',   'desc' => 'Track ingredients, set low-stock alerts, and reduce food wastage automatically.', 'icon' => 'box'],
                ['title' => 'Reports & Analytics', 'desc' => 'Daily sales summaries, top-selling items, and revenue trends at your fingertips.', 'icon' => 'bar-chart-2'],
            ];
            $icons = [
                'grid'        => '<rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>',
                'clipboard'   => '<path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>',
                'monitor'     => '<rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>',
                'credit-card' => '<rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/>',
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
        <h2>Ready to Modernise Your Restaurant?</h2>
        <p>Join restaurants and cafes already using 1Dine to serve faster, reduce errors, and grow their business.</p>
        <a href="{{ route('contact') }}" class="btn-white">Get Started Today</a>
    </div>
</section>

@endsection
