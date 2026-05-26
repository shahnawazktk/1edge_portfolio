@extends('layouts.app')

@section('title', 'Contact Us | 1Edge School System')
@section('body_class', 'sub_page')

@push('styles')
<style>
  .hero_area { background: linear-gradient(135deg, #022f4a 0%, #0f3a53 100%); }
  
  /* Page Banner */
  .page_banner {
    background: linear-gradient(135deg, #022f4a 0%, #0f3a53 100%);
    padding: 80px 0 60px;
    text-align: center;
    color: #fff;
  }
  .page_banner h1 { font-size: 2.5rem; font-weight: 700; margin-bottom: 10px; }
  .page_banner p { font-size: 1rem; opacity: 0.85; }
  .page_banner .breadcrumb { background: transparent; justify-content: center; padding: 0; margin-top: 10px; }
  .page_banner .breadcrumb-item a { color: #fe4801; }
  .page_banner .breadcrumb-item.active { color: #ccc; }
  .page_banner .breadcrumb-item + .breadcrumb-item::before { color: #aaa; }

  /* Contact Section */
  .contact_section {
    padding: 80px 0;
    background: #f8f9fa;
  }

  .contact_info_box {
    background: #fff;
    border-radius: 12px;
    padding: 40px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.05);
    height: 100%;
  }

  .contact_info_box h3 {
    color: #022f4a;
    font-weight: 700;
    margin-bottom: 25px;
    position: relative;
    padding-bottom: 12px;
  }

  .contact_info_box h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 3px;
    background: #fe4801;
  }

  .contact_info_box p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 30px;
  }

  .info_item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 25px;
  }

  .info_item .icon_box {
    min-width: 50px;
    height: 50px;
    background: #fff5f0;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    transition: all 0.3s;
  }

  .info_item:hover .icon_box {
    background: #fe4801;
  }

  .info_item .icon_box svg {
    width: 24px;
    height: 24px;
    stroke: #fe4801;
    fill: none;
    transition: all 0.3s;
  }

  .info_item:hover .icon_box svg {
    stroke: #fff;
  }

  .info_item .details h5 {
    color: #022f4a;
    font-weight: 700;
    margin-bottom: 5px;
    font-size: 1.05rem;
  }

  .info_item .details p {
    color: #666;
    margin: 0;
    font-size: 0.95rem;
  }

  .info_item .details a {
    color: #666;
    text-decoration: none;
    transition: color 0.3s;
  }

  .info_item .details a:hover {
    color: #fe4801;
  }

  /* Contact Form */
  .contact_form_box {
    background: #fff;
    border-radius: 12px;
    padding: 40px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.05);
  }

  .contact_form_box h3 {
    color: #022f4a;
    font-weight: 700;
    margin-bottom: 25px;
    position: relative;
    padding-bottom: 12px;
  }

  .contact_form_box h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 3px;
    background: #fe4801;
  }

  .form-group label {
    font-weight: 600;
    color: #022f4a;
    font-size: 0.9rem;
    margin-bottom: 8px;
  }

  .form-control {
    border: 1px solid #e0e0e0;
    border-radius: 6px;
    padding: 12px 15px;
    height: auto;
    font-size: 0.95rem;
    transition: all 0.3s;
  }

  .form-control:focus {
    border-color: #fe4801;
    box-shadow: 0 0 0 0.2rem rgba(254, 72, 1, 0.15);
    color: #022f4a;
  }

  .btn_submit {
    background: #fe4801;
    color: #fff;
    border: 2px solid #fe4801;
    font-weight: 700;
    padding: 12px 35px;
    border-radius: 6px;
    transition: all 0.3s;
    cursor: pointer;
  }

  .btn_submit:hover {
    background: #e03d00;
    border-color: #e03d00;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(254, 72, 1, 0.2);
  }
</style>
@endpush

@section('content')
<div class="hero_area">
  <!-- page banner -->
  <div class="page_banner">
    <h1>Contact Us</h1>
    <p>We would love to hear from you. Get in touch with our team today!</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
      </ol>
    </nav>
  </div>
  <!-- end page banner -->
</div>

<!-- contact section -->
<section class="contact_section">
  <div class="container">
    <div class="row">
      <!-- Left side: Contact Info -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="contact_info_box">
          <h3>Get In Touch</h3>
          <p>
            Have questions about our smart school system, custom configurations, or pricing?
            Fill out the form, or reach out directly via phone or email. Our team is here to support you.
          </p>

          <div class="info_item">
            <div class="icon_box">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
              </svg>
            </div>
            <div class="details">
              <h5>Call Us</h5>
              <p><a href="tel:03499088073">03499088073</a></p>
            </div>
          </div>

          <div class="info_item">
            <div class="icon_box">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
              </svg>
            </div>
            <div class="details">
              <h5>Email Us</h5>
              <p><a href="mailto:info@1edge.com">info@1edge.com</a></p>
            </div>
          </div>

          <div class="info_item">
            <div class="icon_box">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
            </div>
            <div class="details">
              <h5>Our Location</h5>
              <p>Karachi, Pakistan</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right side: Contact Form -->
      <div class="col-lg-7">
        <div class="contact_form_box">
          <h3>Send Us A Message</h3>
          
          @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif

          <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Thank you for contacting 1Edge! Our representative will call you shortly.'); this.reset();">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name">Full Name *</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name">
              </div>
              <div class="col-md-6 form-group">
                <label for="email">Email Address *</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6 form-group">
                <label for="phone">Phone Number *</label>
                <input type="text" class="form-control" id="phone" name="phone" required placeholder="Enter your phone number">
              </div>
              <div class="col-md-6 form-group">
                <label for="school_name">School Name</label>
                <input type="text" class="form-control" id="school_name" name="school_name" placeholder="Enter school name">
              </div>
            </div>

            <div class="form-group mt-3">
              <label for="purpose">Purpose of Inquiry *</label>
              <select class="form-control" id="purpose" name="purpose" required>
                <option value="" disabled selected>Select an option</option>
                <option value="demo">Book a Free Live Demo</option>
                <option value="pricing">Get Pricing & Plans Info</option>
                <option value="custom">Request Custom Modules</option>
                <option value="support">Technical Support</option>
                <option value="other">Other Inquiry</option>
              </select>
            </div>

            <div class="form-group mt-3">
              <label for="message">Your Message *</label>
              <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Write your message here..."></textarea>
            </div>

            <div class="mt-4">
              <button type="submit" class="btn_submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end contact section -->
@endsection
