@extends('layouts.app')

@section('title', 'Web App Development — 1Edge Technologies')
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
        <h1>Web App Development</h1>
        <p>Scalable, high-performance web applications built with modern frameworks to power your business processes.</p>
    </div>
</section>

<section class="overview_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/web-app-overview.png') }}" alt="Web App Development" class="img-fluid"
                     style="border-radius:10px; box-shadow:0 10px 40px rgba(0,0,0,.12); min-height:280px; background:#e8f4f8;"
                     onerror="this.style.background='#e8f4f8';this.removeAttribute('onerror')">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2>Powerful Apps Built to Scale</h2>
                <p>We develop robust web applications that automate workflows, improve efficiency, and deliver seamless user experiences — from MVP to enterprise-grade platforms.</p>
                <ul>
                    <li>Custom SaaS & enterprise web applications</li>
                    <li>RESTful API & third-party integrations</li>
                    <li>Real-time features with WebSockets</li>
                    <li>Role-based access control & authentication</li>
                    <li>Scalable cloud-ready architecture</li>
                    <li>Agile development with regular deliverables</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="features_section">
    <div class="container">
        <div class="sec-heading">
            <h2>What We Build</h2>
            <p>End-to-end web application development across all major frameworks and stacks.</p>
            <span class="line"></span>
        </div>
        <div class="row">
            @php
            $features = [
                ['title' => 'Custom Dashboards',    'desc' => 'Interactive admin panels and dashboards with real-time data visualization.', 'icon' => 'layout'],
                ['title' => 'API Development',      'desc' => 'RESTful and GraphQL APIs that connect your app to any service or platform.', 'icon' => 'code'],
                ['title' => 'Authentication',       'desc' => 'Secure login systems with OAuth, 2FA, and role-based permissions.', 'icon' => 'lock'],
                ['title' => 'Real-time Features',   'desc' => 'Live notifications, chat, and data updates powered by WebSockets.', 'icon' => 'activity'],
                ['title' => 'Database Design',      'desc' => 'Optimized relational and NoSQL database architecture for your app.', 'icon' => 'database'],
                ['title' => 'Cloud Deployment',     'desc' => 'CI/CD pipelines and cloud deployment for zero-downtime releases.', 'icon' => 'cloud'],
            ];
            $icons = [
                'layout'   => '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/>',
                'code'     => '<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>',
                'lock'     => '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>',
                'activity' => '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>',
                'database' => '<ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>',
                'cloud'    => '<path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/>',
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
        <h2>Ready to Build Your Web Application?</h2>
        <p>Tell us your idea and we'll turn it into a powerful, scalable web application.</p>
        <a href="{{ route('contact') }}" class="btn-white">Start Your Project</a>
    </div>
</section>

@endsection
