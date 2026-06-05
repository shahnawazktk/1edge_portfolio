<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inquiry Received</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #eef2f5 100%);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', sans-serif;
            line-height: 1.6;
            color: #2c3e50;
        }

        /* Main Container */
        .email-wrapper {
            max-width: 640px;
            margin: 0 auto;
            padding: 20px;
        }

        .email-container {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08), 0 0 1px rgba(0, 0, 0, 0.05);
        }

        /* ========== HEADER SECTION ========== */
        .header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            padding: 48px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .header-content {
            position: relative;
            z-index: 1;
        }

        .header-icon {
            font-size: 48px;
            margin-bottom: 16px;
        }

        .header h1 {
            color: #ffffff;
            font-size: 32px;
            font-weight: 700;
            margin: 0 0 12px 0;
            letter-spacing: -0.5px;
        }

        .header-subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            margin: 0;
            font-weight: 400;
        }

        /* ========== CONTENT SECTION ========== */
        .content {
            padding: 48px 40px;
        }

        /* Contact Info Grid */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 48px;
        }

        .contact-card {
            background: linear-gradient(135deg, #f8f9fc 0%, #ffffff 100%);
            border: 1px solid #e8ecf1;
            border-radius: 12px;
            padding: 24px;
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            border-color: #2a5298;
            box-shadow: 0 4px 12px rgba(42, 82, 152, 0.08);
            transform: translateY(-2px);
        }

        .contact-label {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #7f8fa3;
            margin-bottom: 10px;
            display: block;
        }

        .contact-value {
            font-size: 18px;
            font-weight: 600;
            color: #1e3c72;
            word-break: break-word;
            line-height: 1.4;
        }

        .contact-value a {
            color: #2a5298;
            text-decoration: none;
            border-bottom: 2px solid #2a5298;
            transition: all 0.2s ease;
        }

        .contact-value a:hover {
            color: #1e3c72;
            background: rgba(42, 82, 152, 0.05);
            padding: 2px 4px;
            border-radius: 2px;
        }

        /* Subject/Interest Section */
        .subject-section {
            background: linear-gradient(135deg, #fff5e6 0%, #fffcf7 100%);
            border: 1px solid #ffe8cc;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 32px;
        }

        .subject-section .contact-label {
            color: #b8860b;
        }

        .subject-badge {
            display: inline-block;
            background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 15px;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(42, 82, 152, 0.2);
        }

        /* Message Section */
        .message-section {
            margin-bottom: 32px;
        }

        .message-label {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #7f8fa3;
            margin-bottom: 16px;
            display: block;
        }

        .message-box {
            background: linear-gradient(135deg, #f0f3f7 0%, #f8f9fc 100%);
            border: 1px solid #e0e6f0;
            border-left: 4px solid #2a5298;
            border-radius: 8px;
            padding: 28px 24px;
            font-size: 15px;
            line-height: 1.8;
            color: #2c3e50;
            white-space: pre-wrap;
            word-break: break-word;
        }

        /* ========== DIVIDER ========== */
        .divider {
            height: 1px;
            background: linear-gradient(to right, transparent, #e8ecf1, transparent);
            margin: 40px 0;
        }

        /* ========== ACTION SECTION ========== */
        .action-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .action-button {
            display: inline-block;
            background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
            color: #ffffff;
            padding: 14px 42px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(42, 82, 152, 0.3);
        }

        .action-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(42, 82, 152, 0.4);
        }

        /* ========== FOOTER SECTION ========== */
        .footer {
            background: linear-gradient(135deg, #f8f9fc 0%, #f2f5fa 100%);
            border-top: 1px solid #e8ecf1;
            padding: 32px 40px;
            text-align: center;
        }

        .footer-meta {
            display: flex;
            justify-content: center;
            gap: 24px;
            margin-bottom: 16px;
            flex-wrap: wrap;
        }

        .meta-item {
            font-size: 13px;
            color: #7f8fa3;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .footer-text {
            font-size: 13px;
            color: #8a9aaa;
            line-height: 1.6;
            margin: 0;
        }

        .footer-text strong {
            color: #2c3e50;
            font-weight: 600;
        }

        /* ========== RESPONSIVE DESIGN ========== */
        @media (max-width: 600px) {
            .email-wrapper {
                padding: 12px;
            }

            .header {
                padding: 36px 24px;
            }

            .header h1 {
                font-size: 26px;
            }

            .content {
                padding: 28px 24px;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 16px;
                margin-bottom: 24px;
            }

            .contact-card {
                padding: 18px;
            }

            .contact-label {
                font-size: 11px;
                letter-spacing: 0.5px;
            }

            .contact-value {
                font-size: 16px;
            }

            .message-box {
                padding: 20px 18px;
                font-size: 14px;
            }

            .footer {
                padding: 24px 20px;
            }

            .footer-meta {
                gap: 16px;
            }

            .meta-item {
                font-size: 12px;
            }

            .footer-text {
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            .header {
                padding: 28px 16px;
            }

            .header-icon {
                font-size: 40px;
                margin-bottom: 12px;
            }

            .header h1 {
                font-size: 22px;
            }

            .header-subtitle {
                font-size: 14px;
            }

            .content {
                padding: 20px 16px;
            }

            .contact-card {
                padding: 16px;
            }

            .subject-section {
                padding: 16px;
            }

            .divider {
                margin: 28px 0;
            }
        }

        /* Utility Classes */
        .text-muted {
            color: #8a9aaa;
        }

        .text-primary {
            color: #2a5298;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body style="margin: 0; padding: 0; background: linear-gradient(135deg, #f5f7fa 0%, #eef2f5 100%);">
    <div class="email-wrapper">
        <div class="email-container">

            <!-- ========== HEADER ========== -->
            <div class="header">
                <div class="header-content">
                    <div class="header-icon"></div>
                    <h1>New Inquiry Received</h1>
                    <p class="header-subtitle">Lead from your website contact form</p>
                </div>
            </div>

            <!-- ========== CONTENT ========== -->
            <div class="content">

                <!-- Contact Information Grid -->
                <div class="contact-grid">
                    <!-- Name Card -->
                    <div class="contact-card">
                        <span class="contact-label">👤 Full Name</span>
                        <div class="contact-value">{{ $data['name'] }}</div>
                    </div>

                    <!-- Email Card -->
                    <div class="contact-card">
                        <span class="contact-label">✉️ Email Address</span>
                        <div class="contact-value">
                            <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="contact-card">
                        <span class="contact-label">📞 Phone Number</span>
                        <div class="contact-value">
                            <a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a>
                        </div>
                    </div>

                    <!-- Product Card -->
                    <div class="contact-card">
                        <span class="contact-label">💼 Product Interest</span>
                        <div class="contact-value">{{ $data['product'] }}</div>
                    </div>
                </div>

                <!-- Subject Highlight Section -->
                <div class="subject-section">
                    <span class="contact-label">📋 Subject</span>
                    <span class="subject-badge">{{ $data['subject_text'] }}</span>
                </div>

                <!-- Message Section -->
                <div class="message-section">
                    <span class="message-label">💬 Message Details</span>
                    <div class="message-box">{{ $data['message'] }}</div>
                </div>

                <!-- Divider -->
                <div class="divider"></div>

                <!-- Action Section -->
                <div class="action-section">
                    <a href="mailto:{{ $data['email'] }}" class="action-button">Reply to Inquiry</a>
                </div>

            </div>

            <!-- ========== FOOTER ========== -->
            <div class="footer">
                <div class="footer-meta">
                    <div class="meta-item">
                        <span>📅</span>
                        <span>{{ now()->format('M d, Y') }}</span>
                    </div>
                    <div class="meta-item">
                        <span>🕐</span>
                        <span>{{ now()->format('H:i A') }}</span>
                    </div>
                </div>

                <p class="footer-text">
                    This is a <strong>new inquiry</strong> from your website contact form.<br>
                    Please respond promptly to build strong customer relationships.
                </p>

                <p class="text-muted" style="margin-top: 16px; font-size: 12px;">
                    This is an automated message. Do not reply to this email.
                </p>
            </div>

        </div>
    </div>
</body>

</html>
