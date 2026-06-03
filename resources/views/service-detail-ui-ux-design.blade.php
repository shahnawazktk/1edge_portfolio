@extends('layouts.app')

@section('title', 'UI/UX Design — 1Edge Technologies')
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
        <h1>UI/UX Design</h1>
        <p>User-centered design that delivers intuitive, engaging, and visually stunning digital experiences.</p>
    </div>
</section>

<section class="overview_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/ui-ux-overview.png') }}" alt="UI/UX Design" class="img-fluid"
                     style="border-radius:10px; box-shadow:0 10px 40px rgba(0,0,0,.12); min-height:280px; background:#e8f4f8;"
                     onerror="this.style.background='#e8f4f8';this.removeAttribute('onerror')">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2>Design That Drives Results</h2>
                <p>Great design is more than aesthetics — it's about creating experiences that guide users effortlessly to their goals while reflecting your brand's identity.</p>
                <ul>
                    <li>User research & persona development</li>
                    <li>Wireframing & interactive prototyping</li>
                    <li>Brand identity & visual design systems</li>
                    <li>Responsive web & mobile UI design</li>
                    <li>Usability testing & iteration</li>
                    <li>Figma / Adobe XD design handoff</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="features_section">
    <div class="container">
        <div class="sec-heading">
            <h2>Our Design Services</h2>
            <p>From research to final pixels — we cover every stage of the design process.</p>
            <span class="line"></span>
        </div>
        <div class="row">
            @php
            $features = [
                ['title' => 'User Research',        'desc' => 'Deep dive into user needs, behaviors, and pain points to inform design decisions.', 'icon' => 'users'],
                ['title' => 'Wireframing',           'desc' => 'Low and high-fidelity wireframes that map out the perfect user journey.', 'icon' => 'layout'],
                ['title' => 'Visual Design',         'desc' => 'Polished, on-brand visual designs that make a lasting impression.', 'icon' => 'pen-tool'],
                ['title' => 'Prototyping',           'desc' => 'Clickable prototypes to validate ideas before a single line of code is written.', 'icon' => 'play-circle'],
                ['title' => 'Design Systems',        'desc' => 'Scalable component libraries and style guides for consistent UI across platforms.', 'icon' => 'grid'],
                ['title' => 'Usability Testing',     'desc' => 'Real user testing sessions to identify friction and refine the experience.', 'icon' => 'check-circle'],
            ];
            $icons = [
                'users'        => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
                'layout'       => '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/>',
                'pen-tool'     => '<path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/>',
                'play-circle'  => '<circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/>',
                'grid'         => '<rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>',
                'check-circle' => '<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>',
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
        <h2>Ready to Elevate Your Design?</h2>
        <p>Let's create a design experience that your users will love and your business will benefit from.</p>
        <a href="{{ route('contact') }}" class="btn-white">Start Your Project</a>
    </div>
</section>

@endsection
