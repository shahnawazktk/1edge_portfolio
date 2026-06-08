@extends('layouts.app')

@section('title', 'Contact Us | 1Edge Innovation')
@section('body_class', 'sub_page')

@push('styles')
    <style>
        .hero_area {
            background: linear-gradient(135deg, #044964 0%, #025370 100%);
        }

        /* Page Banner */
        .page_banner {
            background: linear-gradient(135deg, #044964 0%, #025370 100%);
            padding: 80px 0 60px;
            text-align: center;
            color: #fff;
        }

        .page_banner h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .page_banner p {
            font-size: 1rem;
            opacity: 0.85;
        }

        .page_banner .breadcrumb {
            background: transparent;
            justify-content: center;
            padding: 0;
            margin-top: 10px;
        }

        .page_banner .breadcrumb-item a {
            color: #fe4801;
        }

        .page_banner .breadcrumb-item.active {
            color: #ccc;
        }

        .page_banner .breadcrumb-item+.breadcrumb-item::before {
            color: #aaa;
        }

        /* Contact Section */
        .contact_section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .contact_info_box {
            background: #fff;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
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
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
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

        select.form-control {
            appearance: auto;
            cursor: pointer;
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

        .btn_submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .btn-loading {
            display: inline-flex;
            align-items: center;
        }

        .invalid-feedback {
            display: block;
            margin-top: 5px;
            font-size: 0.875rem;
        }

        .is-invalid {
            border-color: #dc3545 !important;
        }

        .alert {
            border-radius: 6px;
            margin-bottom: 20px;
        }

        /* ===== RESPONSIVE DESIGN ===== */

        /* Tablets (768px - 991px) */
        @media (max-width: 991px) {
            .page_banner h1 {
                font-size: 2.2rem;
            }

            .page_banner p {
                font-size: 0.95rem;
            }

            .contact_section {
                padding: 60px 0;
            }

            .contact_info_box,
            .contact_form_box {
                padding: 35px;
            }

            .contact_info_box h3,
            .contact_form_box h3 {
                font-size: 1.6rem;
            }
        }

        /* Mobile (576px - 767px) */
        @media (max-width: 767px) {
            .page_banner {
                padding: 60px 0 40px;
            }

            .page_banner h1 {
                font-size: 2rem;
            }

            .page_banner p {
                font-size: 0.9rem;
            }

            .contact_section {
                padding: 50px 0;
            }

            .contact_info_box,
            .contact_form_box {
                padding: 30px 25px;
                margin-bottom: 25px;
            }

            .contact_info_box h3,
            .contact_form_box h3 {
                font-size: 1.5rem;
                margin-bottom: 20px;
            }

            .contact_info_box p {
                font-size: 0.9rem;
                margin-bottom: 25px;
            }

            .info_item {
                margin-bottom: 20px;
            }

            .info_item .icon_box {
                min-width: 45px;
                height: 45px;
                margin-right: 15px;
            }

            .info_item .icon_box svg {
                width: 22px;
                height: 22px;
            }

            .info_item .details h5 {
                font-size: 1rem;
            }

            .info_item .details p {
                font-size: 0.9rem;
            }

            .form-group label {
                font-size: 0.88rem;
            }

            .form-control {
                padding: 11px 14px;
                font-size: 0.9rem;
            }

            .btn_submit {
                padding: 11px 30px;
                font-size: 0.95rem;
            }
        }

        /* Small Mobile (up to 575px) */
        @media (max-width: 575px) {
            .page_banner {
                padding: 50px 0 35px;
            }

            .page_banner h1 {
                font-size: 1.8rem;
            }

            .page_banner p {
                font-size: 0.85rem;
            }

            .page_banner .breadcrumb {
                font-size: 0.85rem;
            }

            .contact_section {
                padding: 45px 0;
            }

            .contact_info_box,
            .contact_form_box {
                padding: 25px 20px;
                margin-bottom: 20px;
            }

            .contact_info_box h3,
            .contact_form_box h3 {
                font-size: 1.3rem;
                margin-bottom: 18px;
            }

            .contact_info_box h3::after,
            .contact_form_box h3::after {
                width: 40px;
                height: 2px;
            }

            .contact_info_box p {
                font-size: 0.88rem;
                margin-bottom: 20px;
            }

            .info_item {
                margin-bottom: 18px;
            }

            .info_item .icon_box {
                min-width: 42px;
                height: 42px;
                margin-right: 12px;
            }

            .info_item .icon_box svg {
                width: 20px;
                height: 20px;
            }

            .info_item .details h5 {
                font-size: 0.95rem;
            }

            .info_item .details p {
                font-size: 0.85rem;
            }

            .form-group label {
                font-size: 0.85rem;
                margin-bottom: 6px;
            }

            .form-control {
                padding: 10px 12px;
                font-size: 0.88rem;
            }

            .btn_submit {
                padding: 10px 28px;
                font-size: 0.9rem;
                width: 100%;
            }
        }

        /* Extra Small Mobile (up to 400px) */
        @media (max-width: 400px) {
            .page_banner h1 {
                font-size: 1.6rem;
            }

            .page_banner p {
                font-size: 0.8rem;
            }

            .contact_info_box,
            .contact_form_box {
                padding: 22px 18px;
            }

            .contact_info_box h3,
            .contact_form_box h3 {
                font-size: 1.2rem;
            }

            .info_item .icon_box {
                min-width: 40px;
                height: 40px;
            }

            .info_item .details h5 {
                font-size: 0.9rem;
            }

            .info_item .details p {
                font-size: 0.8rem;
            }

            .form-control {
                padding: 9px 11px;
                font-size: 0.85rem;
            }
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
                            Have questions about our 1 Edge , custom configurations, or pricing?
                            Fill out the form, or reach out directly via phone or email. Our team is here to support you.
                        </p>

                        <div class="info_item">
                            <div class="icon_box">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </div>
                            <div class="details">
                                <h5>Call Us</h5>
                                <p><a href="tel:03029419892">0302 9419892</a></p>
                            </div>
                        </div>

                        <div class="info_item">
                            <div class="icon_box">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <div class="details">
                                <h5>Email Us</h5>
                                <p><a href="mailto:info@1edge.online">info@1edge.online</a></p>
                            </div>
                        </div>

                        <div class="info_item">
                            <div class="icon_box">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="details">
                                <h5>Our Location</h5>
                                <p>Address: KP IT Park, Peshawar, Khyber Pakhtunkhwa, Pakistan</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right side: Contact Form -->
                <div class="col-lg-7">
                    <div class="contact_form_box">
                        <h3>Send Us A Message</h3>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Please fix the following errors:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
                            @csrf
                            
                            <!-- Row 1: Name and Email -->
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="name">Full Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required placeholder="Enter your full name" maxlength="100">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="email">Email Address *</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required placeholder="example@company.com" maxlength="100">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Row 2: Phone and Product -->
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="phone">Phone Number *</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required placeholder="03XX XXXXXXX" maxlength="16">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="product">Product Number *</label>
                                    <select class="form-control @error('product') is-invalid @enderror" id="product" name="product" required>
                                        <option value="" disabled {{ old('product') ? '' : 'selected' }}>Select a product</option>
                                        <option value="1School" {{ old('product') == '1School' ? 'selected' : '' }}>1School</option>
                                        <option value="1Station" {{ old('product') == '1Station' ? 'selected' : '' }}>1Station</option>
                                        <option value="1Hospital" {{ old('product') == '1Hospital' ? 'selected' : '' }}>1Hospital</option>
                                        <option value="1Dine" {{ old('product') == '1Dine' ? 'selected' : '' }}>1Dine</option>
                                        <option value="Other" {{ old('product') == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('product')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Row 3: Subject -->
                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="subject_text">Subject *</label>
                                    <input type="text" class="form-control @error('subject_text') is-invalid @enderror" id="subject_text" name="subject_text" value="{{ old('subject_text') }}" required placeholder="Enter Subject Here">
                                    @error('subject_text')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Row 4: Message -->
                            <div class="form-group mb-3">
                                <label for="message">Your Message *</label>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required placeholder="Write your message here...">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn_submit">
                                    <span class="btn-text">Send Message</span>
                                    <span class="loader spinner-border spinner-border-sm d-none ms-2" role="status" aria-hidden="true"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const submitBtn = contactForm.querySelector('.btn_submit');
            const btnText = submitBtn.querySelector('.btn-text');
            const btnLoading = submitBtn.querySelector('.loader');

            const phoneInput = document.getElementById('phone');
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');

            // ============ NAME FIELD MASKING ============
            nameInput.addEventListener('input', function(e) {
                // Allow only letters and spaces
                let value = e.target.value;

                // Remove digits and special characters
                value = value.replace(/[^a-zA-Z\s]/g, '');

                // Collapse multiple spaces
                value = value.replace(/\s+/g, ' ');

                // Capitalize first letter of each word
                value = value.replace(/\b\w/g, function(char) {
                    return char.toUpperCase();
                });

                e.target.value = value;
            });


            // Validate name on blur
            nameInput.addEventListener('blur', function(e) {
                const value = e.target.value.trim();
                
                // Check if name has at least 3 characters and contains at least one space (full name)
                if (value.length < 3) {
                    showFieldError(nameInput, 'Name must be at least 3 characters long.');
                } else if (!value.includes(' ')) {
                    showFieldError(nameInput, 'Please enter your full name (First and Last name).');
                } else {
                    clearFieldError(nameInput);
                }
            });

            nameInput.addEventListener('focus', function() {
                clearFieldError(nameInput);
            });

            // ============ EMAIL FIELD MASKING ============
            emailInput.addEventListener('input', function(e) {
                // Convert to lowercase and remove spaces
                let value = e.target.value.toLowerCase().replace(/\s/g, '');
                e.target.value = value;
            });

            // Validate email on blur
            emailInput.addEventListener('blur', function(e) {
                const value = e.target.value.trim();
                
                // Email regex pattern
                const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                
                if (value.length > 0 && !emailPattern.test(value)) {
                    showFieldError(emailInput, 'Please enter a valid email address (e.g., name@company.com).');
                } else if (value.length > 0) {
                    clearFieldError(emailInput);
                }
            });

            emailInput.addEventListener('focus', function() {
                clearFieldError(emailInput);
            });

            // ============ PHONE NUMBER MASKING ============
            phoneInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, ''); // Remove all non-digits
                let formattedValue = '';

                // Handle Pakistani format
                if (value.startsWith('92')) {
                    // International format: +92 3XX XXXXXXX
                    formattedValue = '+92';
                    if (value.length > 2) {
                        formattedValue += ' ' + value.substring(2, 5);
                    }
                    if (value.length > 5) {
                        formattedValue += ' ' + value.substring(5, 12);
                    }
                } else if (value.startsWith('0')) {
                    // Local format: 03XX XXXXXXX
                    formattedValue = value.substring(0, 4);
                    if (value.length > 4) {
                        formattedValue += ' ' + value.substring(4, 11);
                    }
                } else if (value.length > 0) {
                    // If starts with 3, add 0 prefix
                    if (value.startsWith('3')) {
                        value = '0' + value;
                        formattedValue = value.substring(0, 4);
                        if (value.length > 4) {
                            formattedValue += ' ' + value.substring(4, 11);
                        }
                    } else {
                        // Just format as entered
                        formattedValue = value.substring(0, 4);
                        if (value.length > 4) {
                            formattedValue += ' ' + value.substring(4, 11);
                        }
                    }
                }

                e.target.value = formattedValue;
            });

            // Validate phone on blur
            phoneInput.addEventListener('blur', function(e) {
                const value = e.target.value.replace(/\D/g, '');
                
                // Check if it's a valid Pakistani phone number
                const isValidPakistani = (value.startsWith('92') && value.length === 12) || 
                                        (value.startsWith('0') && value.length === 11);
                
                if (!isValidPakistani && value.length > 0) {
                    showFieldError(phoneInput, 'Please enter a valid Pakistani phone number (e.g., 0300 1234567).');
                } else {
                    clearFieldError(phoneInput);
                }
            });

            phoneInput.addEventListener('focus', function() {
                clearFieldError(phoneInput);
            });

            // ============ HELPER FUNCTIONS ============
            function showFieldError(field, message) {
                field.setCustomValidity(message);
                field.classList.add('is-invalid');
                
                // Remove existing custom error
                const existingError = field.parentNode.querySelector('.invalid-feedback.custom-error');
                if (existingError) {
                    existingError.remove();
                }
                
                // Add error message if not exists or it's not a server error
                const serverError = field.parentNode.querySelector('.invalid-feedback:not(.custom-error)');
                if (!serverError) {
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'invalid-feedback custom-error';
                    errorDiv.style.display = 'block';
                    errorDiv.textContent = message;
                    field.parentNode.insertBefore(errorDiv, field.nextSibling);
                }
            }

            function clearFieldError(field) {
                field.setCustomValidity('');
                field.classList.remove('is-invalid');
                
                // Remove custom error message only
                const customError = field.parentNode.querySelector('.invalid-feedback.custom-error');
                if (customError) {
                    customError.remove();
                }
            }

            // ============ FORM SUBMISSION ============
            contactForm.addEventListener('submit', function(e) {
                // Final validation before submit
                let isValid = true;

                // Validate name
                const nameValue = nameInput.value.trim();
                if (nameValue.length < 3 || !nameValue.includes(' ')) {
                    showFieldError(nameInput, 'Please enter your full name (First and Last name).');
                    isValid = false;
                }

                // Validate email
                const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                if (!emailPattern.test(emailInput.value.trim())) {
                    showFieldError(emailInput, 'Please enter a valid email address.');
                    isValid = false;
                }

                // Validate phone
                const phoneValue = phoneInput.value.replace(/\D/g, '');
                const isValidPhone = (phoneValue.startsWith('92') && phoneValue.length === 12) || 
                                    (phoneValue.startsWith('0') && phoneValue.length === 11);
                if (!isValidPhone) {
                    showFieldError(phoneInput, 'Please enter a valid Pakistani phone number.');
                    isValid = false;
                }

                if (!isValid) {
                    e.preventDefault();
                    return false;
                }

                // Show loading state
                submitBtn.disabled = true;
                btnText.classList.add('d-none');
                btnLoading.classList.remove('d-none');
            });

            // Check if there are validation errors or success message
            const hasErrors = document.querySelector('.is-invalid') || document.querySelector('.alert-danger');
            // Reset button if there are errors (form wasn't actually submitted)
            if (hasErrors) {
                submitBtn.disabled = false;
                btnText.classList.remove('d-none');
                btnLoading.classList.add('d-none');
            }


            // Auto-hide alerts after 5 seconds
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                setTimeout(function() {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }, 5000);
            });
        });
    </script>
@endpush
