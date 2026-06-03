@extends('layouts.app')

@section('title', 'Database Solutions — 1Edge Technologies')
@section('body_class', 'sub_page')

@push('styles')
<style>
    .product_hero { background: linear-gradient(135deg, #044964 0%, #025370 100%); padding: 80px 0 60px; text-align: center; color: #fff; }
    .product_hero h1 { font-size: 2.8rem; font-weight: 700; margin-bottom: 15px; }
    .product_hero p { font-size: 1.1rem; max-width: 620px; margin: 0 auto 30px; opacity: .88; }
    .product_hero .btn-demo { display: inline-block; background: #fe4801; color: #fff; padding: 13px 36px; border-radius: 4px; font-weight: 700; text-decoration: none; transition: background .3s; }
    .product_hero .btn-demo:hover { background: #d93d00; color: #fff; }
    .sec-heading { text-align: center; margin-bottom: 50px; }
    .sec-heading h2 { font-size: 2rem; font-weight: 700; color: #022f4a; }
    .sec-heading p { color: #555; max-width: 580px; margin: 10px auto 0; }
    .sec-heading span.line { display: block; width: 60px; height: 3px; background: #fe4801; margin: 12px auto 0; }
    .features_section { padding: 75px 0; background: #f8f9fa; }
    .feature-card { background: #fff; border-radius: 10px; padding: 30px 25px; text-align: center; margin-bottom: 30px; border: 1px solid #e8e8e8; transition: all .3s; height: 100%; }
    .feature-card:hover { border-color: #fe4801; box-shadow: 0 10px 30px rgba(254,72,1,.15); transform: translateY(-6px); }
    .feature-card .feat-icon { width: 65px; height: 65px; background: #fff3ee; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; }
    .feature-card .feat-icon svg { width: 30px; height: 30px; stroke: #fe4801; }
    .feature-card h5 { font-weight: 700; color: #022f4a; margin-bottom: 8px; }
    .feature-card p { color: #666; font-size: .93rem; margin: 0; }
    .overview_section { padding: 75px 0; }
    .overview_section h2 { font-size: 2rem; font-weight: 700; color: #022f4a; margin-bottom: 15px; }
    .overview_section p { color: #555; margin-bottom: 20px; }
    .overview_section ul { list-style: none; padding: 0; }
    .overview_section ul li { padding: 6px 0; color: #555; font-size: .95rem; }
    .overview_section ul li::before { content: "✓ "; color: #fe4801; font-weight: 700; }
    .cta_section { background: linear-gradient(135deg, #fe4801 0%, #ff6a35 100%); padding: 70px 0; text-align: center; color: #fff; }
    .cta_section h2 { font-size: 2rem; font-weight: 700; margin-bottom: 15px; }
    .cta_section p { font-size: 1.05rem; max-width: 560px; margin: 0 auto 30px; opacity: .92; }
    .cta_section .btn-white { display: inline-block; background: #fff; color: #fe4801; padding: 13px 38px; border-radius: 4px; font-weight: 700; text-decoration: none; margin: 0 8px 10px; transition: all .3s; }
    .cta_section .btn-white:hover { background: #022f4a; color: #fff; }
    .back-link { display: inline-flex; align-items: center; gap: 6px; color: rgba(255,255,255,.8); text-decoration: none; font-size: .9rem; margin-bottom: 20px; }
    .back-link:hover { color: #fff; }
</style>
@endpush

@section('content')

<section class="product_hero">
    <div class="container">
        <a href="{{ route('service') }}" class="back-link">← Back to Services</a>
        <h1>Database Solutions</h1>
        <p>Robust database design, optimization, and management services that keep your data secure, fast, and reliable.</p>
    </div>
</section>

<section class="overview_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/database-overview.png') }}" alt="Database Solutions" class="img-fluid"
                     style="border-radius:10px; box-shadow:0 10px 40px rgba(0,0,0,.12); min-height:280px; background:#e8f4f8;"
                     onerror="this.style.background='#e8f4f8';this.removeAttribute('onerror')">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2>Your Data, Architected for Performance</h2>
                <p>We design and manage database systems that handle high loads, ensure data integrity, and give you the speed your application demands.</p>
                <ul>
                    <li>Relational database design (MySQL, PostgreSQL)</li>
                    <li>NoSQL solutions (MongoDB, Redis)</li>
                    <li>Query optimization & performance tuning</li>
                    <li>Database migration & data modeling</li>
                    <li>Automated backups & disaster recovery</li>
                    <li>Database monitoring & ongoing management</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="features_section">
    <div class="container">
        <div class="sec-heading">
            <h2>What We Offer</h2>
            <p>End-to-end database services — from design to production management.</p>
            <span class="line"></span>
        </div>
        <div class="row">
            @php
            $features = [
                ['title' => 'Schema Design',        'desc' => 'Carefully architected schemas that scale with your data needs.', 'icon' => 'database'],
                ['title' => 'Performance Tuning',   'desc' => 'Index optimization, query rewriting, and caching strategies for speed.', 'icon' => 'zap'],
                ['title' => 'Data Migration',       'desc' => 'Safe, zero-downtime migration of your data between platforms.', 'icon' => 'repeat'],
                ['title' => 'Backup & Recovery',    'desc' => 'Automated backup strategies and tested recovery plans.', 'icon' => 'shield'],
                ['title' => 'Replication & Scaling','desc' => 'Master-replica setups and sharding for high availability.', 'icon' => 'copy'],
                ['title' => 'Monitoring & Alerts',  'desc' => 'Real-time monitoring with alerts to catch issues before they impact users.', 'icon' => 'activity'],
            ];
            $icons = [
                'database'  => '<ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>',
                'zap'       => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
                'repeat'    => '<polyline points="17 1 21 5 17 9"/><path d="M3 11V9a4 4 0 0 1 4-4h14"/><polyline points="7 23 3 19 7 15"/><path d="M21 13v2a4 4 0 0 1-4 4H3"/>',
                'shield'    => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
                'copy'      => '<rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>',
                'activity'  => '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>',
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

<section class="cta_section">
    <div class="container">
        <h2>Need a Reliable Database Solution?</h2>
        <p>Let's build a database infrastructure that grows with your business and never lets you down.</p>
        <a href="{{ route('contact') }}" class="btn-white">Start Your Project</a>
    </div>
</section>

@endsection
