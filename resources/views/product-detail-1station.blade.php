@extends('layouts.app')

@section('title', '1Station | 1Edge Petrol Station Management System')
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
        text-decoration: none; transition: all .3s;
    }
    .cta_section .btn-white:hover { background: #022f4a; color: #fff; }
</style>
@endpush

@section('content')

{{-- Hero --}}
<section class="product_hero">
    <div class="container">
        <h1>1Station</h1>
        <p>A smart petrol station management system that automates sales, inventory, and reporting — all from one dashboard.</p>
        <a href="{{ route('contact') }}" class="btn-demo">Request a Demo</a>
    </div>
</section>

{{-- Overview --}}
<section class="overview_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/1station-overview.png') }}" alt="1Station Overview" class="img-fluid"
                     onerror="this.style.background='#e8f4f8';this.style.minHeight='300px';this.removeAttribute('onerror')">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2>Full Control of Your Station</h2>
                <p>1Station is a cloud-based petrol station management platform that tracks every litre, every transaction, and every employee shift — in real time.</p>
                <ul>
                    <li>Real-time fuel sales & nozzle tracking</li>
                    <li>Daily cash & credit sales reconciliation</li>
                    <li>Fuel inventory & dip-stick management</li>
                    <li>Employee shift & attendance tracking</li>
                    <li>Supplier & purchase order management</li>
                    <li>Automated daily & monthly reports</li>
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
            <p>Everything you need to run a profitable, well-managed petrol station.</p>
            <span class="line"></span>
        </div>
        <div class="row">
            @php
            $features = [
                ['title' => 'Sales Tracking',      'desc' => 'Monitor every nozzle, pump, and shift sale in real time with accurate daily totals.', 'icon' => 'trending-up'],
                ['title' => 'Inventory Control',   'desc' => 'Track fuel stock levels, dip readings, and reconcile physical vs system inventory automatically.', 'icon' => 'database'],
                ['title' => 'Shift Management',    'desc' => 'Manage employee shifts, assign pumps, and track individual sales performance per shift.', 'icon' => 'clock'],
                ['title' => 'Cash Reconciliation', 'desc' => 'Automate cash, credit, and digital payment reconciliation to eliminate manual errors.', 'icon' => 'credit-card'],
                ['title' => 'Supplier Orders',     'desc' => 'Raise and track purchase orders for fuel supplies and manage supplier invoices digitally.', 'icon' => 'truck'],
                ['title' => 'Reports & Analytics', 'desc' => 'Get instant daily, weekly, and monthly reports on sales, expenses, and profitability.', 'icon' => 'bar-chart-2'],
            ];
            $icons = [
                'trending-up' => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>',
                'database'    => '<ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>',
                'clock'       => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
                'credit-card' => '<rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/>',
                'truck'       => '<rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/>',
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
        <h2>Ready to Modernise Your Station?</h2>
        <p>Join station owners already using 1Station to eliminate guesswork and boost profitability.</p>
        <a href="{{ route('contact') }}" class="btn-white">Get Started Today</a>
    </div>
</section>

@endsection
