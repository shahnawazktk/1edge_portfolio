@extends('layouts.app')

@section('title', 'Cloud Services — 1Edge Innovation')
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
        <h1>Cloud Services</h1>
        <p>Cloud migration, deployment, and infrastructure management — scale confidently with modern cloud solutions.</p>
    </div>
</section>

<section class="overview_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/cloud-overview.png') }}" alt="Cloud Services" class="img-fluid"
                     style="border-radius:10px; box-shadow:0 10px 40px rgba(0,0,0,.12); min-height:280px; background:#e8f4f8;"
                     onerror="this.style.background='#e8f4f8';this.removeAttribute('onerror')">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2>Move to the Cloud with Confidence</h2>
                <p>We help businesses migrate to the cloud, set up scalable infrastructure, and manage it — so you can focus on building products, not managing servers.</p>
                <ul>
                    <li>Cloud migration (AWS, GCP, Azure)</li>
                    <li>Infrastructure as Code (Terraform, CloudFormation)</li>
                    <li>CI/CD pipeline setup & automation</li>
                    <li>Containerization with Docker & Kubernetes</li>
                    <li>Auto-scaling & load balancing</li>
                    <li>24/7 monitoring & cost optimization</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="features_section">
    <div class="container">
        <div class="sec-heading">
            <h2>Our Cloud Capabilities</h2>
            <p>Comprehensive cloud services to build, deploy, and manage your infrastructure.</p>
            <span class="line"></span>
        </div>
        <div class="row">
            @php
            $features = [
                ['title' => 'Cloud Migration',      'desc' => 'Seamlessly move your workloads to AWS, GCP, or Azure with zero downtime.', 'icon' => 'upload-cloud'],
                ['title' => 'CI/CD Pipelines',      'desc' => 'Automated build, test, and deployment pipelines for faster releases.', 'icon' => 'git-merge'],
                ['title' => 'Containerization',     'desc' => 'Docker and Kubernetes setups for portable, scalable deployments.', 'icon' => 'box'],
                ['title' => 'Auto Scaling',         'desc' => 'Infrastructure that scales up and down automatically with demand.', 'icon' => 'trending-up'],
                ['title' => 'Security & Compliance','desc' => 'IAM policies, VPC configuration, and compliance-ready cloud setups.', 'icon' => 'shield'],
                ['title' => 'Cost Optimization',    'desc' => 'Right-sizing and reserved instance strategies to reduce cloud bills.', 'icon' => 'dollar-sign'],
            ];
            $icons = [
                'upload-cloud' => '<polyline points="16 16 12 12 8 16"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"/>',
                'git-merge'    => '<circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M6 21V9a9 9 0 0 0 9 9"/>',
                'box'          => '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/>',
                'trending-up'  => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>',
                'shield'       => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
                'dollar-sign'  => '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>',
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
        <h2>Ready to Move to the Cloud?</h2>
        <p>Let's architect a cloud solution that gives your business the speed, scale, and reliability it deserves.</p>
        <a href="{{ route('contact') }}" class="btn-white">Start Your Project</a>
    </div>
</section>

@endsection
