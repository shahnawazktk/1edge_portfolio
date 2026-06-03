@extends('layouts.app')

@section('title', 'Mobile App Development — 1Edge Technologies')
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
        <h1>Mobile App Development</h1>
        <p>Native and cross-platform mobile apps for iOS and Android — built for performance, usability, and growth.</p>
    </div>
</section>

<section class="overview_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/mobile-app-overview.png') }}" alt="Mobile App Development" class="img-fluid"
                     style="border-radius:10px; box-shadow:0 10px 40px rgba(0,0,0,.12); min-height:280px; background:#e8f4f8;"
                     onerror="this.style.background='#e8f4f8';this.removeAttribute('onerror')">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2>Apps That Users Love to Use</h2>
                <p>We design and develop mobile applications that combine beautiful UI with rock-solid performance, delivering an experience your users will keep coming back to.</p>
                <ul>
                    <li>iOS & Android native app development</li>
                    <li>Cross-platform apps with React Native / Flutter</li>
                    <li>Intuitive UI/UX tailored for mobile</li>
                    <li>Backend API & database integration</li>
                    <li>Push notifications & offline support</li>
                    <li>App Store & Play Store deployment</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="features_section">
    <div class="container">
        <div class="sec-heading">
            <h2>What We Build</h2>
            <p>Full-cycle mobile app development from concept to launch and beyond.</p>
            <span class="line"></span>
        </div>
        <div class="row">
            @php
            $features = [
                ['title' => 'iOS Development',      'desc' => 'High-quality Swift/Objective-C apps crafted for iPhone and iPad.', 'icon' => 'smartphone'],
                ['title' => 'Android Development',  'desc' => 'Robust Kotlin/Java apps optimized for all Android devices.', 'icon' => 'tablet'],
                ['title' => 'Cross-Platform',       'desc' => 'Single codebase apps with React Native or Flutter for both platforms.', 'icon' => 'layers'],
                ['title' => 'Push Notifications',   'desc' => 'Real-time push alerts to keep users engaged and informed.', 'icon' => 'bell'],
                ['title' => 'Offline Mode',         'desc' => 'Local data sync so your app works even without internet.', 'icon' => 'wifi-off'],
                ['title' => 'App Store Launch',     'desc' => 'End-to-end submission and release on App Store and Play Store.', 'icon' => 'upload-cloud'],
            ];
            $icons = [
                'smartphone'   => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>',
                'tablet'       => '<rect x="4" y="2" width="16" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>',
                'layers'       => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>',
                'bell'         => '<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/>',
                'wifi-off'     => '<line x1="1" y1="1" x2="23" y2="23"/><path d="M16.72 11.06A10.94 10.94 0 0 1 19 12.55"/><path d="M5 12.55a10.94 10.94 0 0 1 5.17-2.39"/><path d="M10.71 5.05A16 16 0 0 1 22.56 9"/><path d="M1.42 9a15.91 15.91 0 0 1 4.7-2.88"/><path d="M8.53 16.11a6 6 0 0 1 6.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/>',
                'upload-cloud' => '<polyline points="16 16 12 12 8 16"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"/>',
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
        <h2>Ready to Launch Your Mobile App?</h2>
        <p>Share your idea and we'll build a mobile experience your users will love.</p>
        <a href="{{ route('contact') }}" class="btn-white">Start Your Project</a>
    </div>
</section>

@endsection
