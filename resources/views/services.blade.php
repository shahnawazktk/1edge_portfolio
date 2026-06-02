@extends('layouts.app')

@section('title', 'Services — 1Edge Technologies')
@section('body_class', 'sub_page')

@push('styles')
<style>
  .hero_area { background: linear-gradient(135deg, #044964 0%, #025370 100%); }

  /* Page Banner */
  .page_banner { padding: 80px 0 60px; text-align: center; color: #fff; }
  .page_banner h1 { font-size: 2.4rem; font-weight: 700; margin-bottom: 10px; }
  .page_banner p  { font-size: 1.05rem; opacity: 0.85; max-width: 600px; margin: 0 auto; }

  /* Service Cards */
  .services_grid { padding: 70px 0; background: #f8f9fa; }
  .service-card {
    background: #fff;
    border-radius: 10px;
    padding: 35px 25px;
    margin-bottom: 30px;
    border: 1px solid #e8e8e8;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
  }
  .service-card:hover {
    border-color: #fe4801;
    box-shadow: 0 10px 30px rgba(254,72,1,0.12);
    transform: translateY(-6px);
  }
  .service-card .icon-wrap {
    width: 70px; height: 70px;
    background: #fff5f0;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 20px;
    flex-shrink: 0;
  }
  .service-card .icon-wrap svg { width: 34px; height: 34px; stroke: #fe4801; }
  .service-card h5 { font-weight: 700; color: #022f4a; margin-bottom: 12px; font-size: 1.1rem; }
  .service-card p  { color: #555; font-size: 0.93rem; line-height: 1.7; flex-grow: 1; }
  .service-card .read-more {
    display: inline-block;
    margin-top: 15px;
    color: #fe4801;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    border-bottom: 2px solid transparent;
    transition: border-color 0.2s;
  }
  .service-card .read-more:hover { border-color: #fe4801; }

  /* How It Works */
  .how_section { padding: 70px 0; }
  .step-box { text-align: center; padding: 20px; }
  .step-box .step-num {
    width: 55px; height: 55px;
    background: #fe4801; color: #fff;
    border-radius: 50%;
    font-size: 1.4rem; font-weight: 700;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 18px;
  }
  .step-box h6 { font-weight: 700; color: #022f4a; margin-bottom: 8px; }
  .step-box p  { color: #666; font-size: 0.9rem; }

  /* CTA */
  .cta_section {
    background: linear-gradient(135deg, #fe4801 0%, #ff7043 100%);
    padding: 60px 0; text-align: center; color: #fff;
  }
  .cta_section h2 { font-size: 2rem; font-weight: 700; margin-bottom: 15px; }
  .cta_section p  { font-size: 1rem; opacity: 0.9; margin-bottom: 30px; }
  .cta_section .btn-cta {
    background: #fff; color: #fe4801;
    font-weight: 700; padding: 12px 35px;
    border-radius: 30px; text-decoration: none;
    font-size: 1rem; transition: all 0.3s; display: inline-block;
  }
  .cta_section .btn-cta:hover { background: #022f4a; color: #fff; }

  /* Responsive */
  @media (max-width: 991px) {
    .page_banner h1 { font-size: 2rem; }
    .services_grid, .how_section { padding: 55px 0; }
    .cta_section { padding: 50px 0; }
    .cta_section h2 { font-size: 1.8rem; }
  }
  @media (max-width: 767px) {
    .page_banner { padding: 55px 0 35px; }
    .page_banner h1 { font-size: 1.8rem; }
    .page_banner p  { font-size: 0.95rem; padding: 0 15px; }
    .services_grid, .how_section { padding: 45px 0; }
    .service-card { padding: 28px 20px; }
    .service-card .icon-wrap { width: 60px; height: 60px; }
    .service-card .icon-wrap svg { width: 28px; height: 28px; }
    .step-box { padding: 15px 10px; margin-bottom: 20px; }
    .cta_section h2 { font-size: 1.6rem; }
    .cta_section p  { font-size: 0.95rem; }
  }
  @media (max-width: 575px) {
    .page_banner h1 { font-size: 1.5rem; }
    .service-card { padding: 22px 15px; }
    .service-card h5 { font-size: 1rem; }
    .cta_section h2 { font-size: 1.4rem; }
    .cta_section .btn-cta { display: block; max-width: 220px; margin: 0 auto; text-align: center; }
  }
</style>
@endpush

{{-- SVG icon definitions (hidden) --}}
@php
$icons = [
  'users' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
  'monitor' => '<rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>',
  'smartphone' => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>',
  'pen-tool' => '<path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/>',
  'database' => '<ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>',
  'cloud' => '<path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/>',
];
@endphp

@section('content')
<div class="hero_area">
  <div class="page_banner">
    <h1>Our Services</h1>
    <p>End-to-end digital solutions — from design to deployment — built to grow your business.</p>
  </div>
</div>

{{-- Services Grid --}}
<section class="services_grid">
  <div class="container">
    <div class="heading_container text-center mb-5">
      <h2>What We Offer</h2>
      <p style="color:#555; max-width:600px; margin:10px auto 0;">
        1Edge delivers a complete digital ecosystem. Each service is crafted to save time,
        reduce complexity, and drive measurable results.
      </p>
    </div>
    <div class="row">
      @foreach($services as $service)
      <div class="col-md-6 col-lg-4 d-flex">
        <div class="service-card">
          <div class="icon-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              {!! $icons[$service['icon']] ?? $icons['monitor'] !!}
            </svg>
          </div>
          <h5>{{ $service['title'] }}</h5>
          <p>{{ $service['description'] }}</p>
          <a href="{{ route('product') }}" class="read-more">Learn More →</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
