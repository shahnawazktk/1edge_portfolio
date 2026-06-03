<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>New Contact Form Submission</title>
    <style>
        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #eef2f5;
            font-family: 'Segoe UI', 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Roboto', Helvetica, Arial, sans-serif;
            line-height: 1.5;
            color: #1a2c3e;
        }

        /* Main Container - Responsive & Centered */
        .email-container {
            max-width: 620px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.12), 0 4px 10px -4px rgba(0, 0, 0, 0.02);
        }

        /* Header Accent Area */
        .email-header {
            background: linear-gradient(135deg, #022f4a 0%, #043a5a 100%);
            padding: 32px 32px 28px 32px;
            text-align: left;
            border-bottom: 5px solid #fe4801;
        }

        .email-header h1 {
            color: #ffffff;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: -0.2px;
            margin: 0 0 8px 0;
            line-height: 1.2;
        }

        .email-header p {
            color: #cbdbe6;
            font-size: 16px;
            margin: 0;
            font-weight: 400;
        }

        /* Content Body */
        .email-body {
            padding: 32px 32px 24px 32px;
            background: #ffffff;
        }

        /* Modern Card Style for each field */
        .info-grid {
            display: flex;
            flex-direction: column;
            gap: 24px;
            margin-bottom: 32px;
        }

        .field-card {
            background: #f9fafc;
            border-radius: 20px;
            padding: 6px 0 6px 0;
            transition: all 0.2s ease;
            border: 1px solid #eef2f8;
        }

        .field-row {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 6px 20px;
        }

        /* Icon placeholder using unicode / symbols (no external assets) */
        .field-icon {
            flex-shrink: 0;
            width: 42px;
            height: 42px;
            background: #ffffff;
            border-radius: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
            border: 1px solid #e2e8f0;
            color: #fe4801;
        }

        .field-content {
            flex: 1;
        }

        .field-label {
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #5b6f82;
            margin-bottom: 6px;
        }

        .field-value {
            font-size: 17px;
            font-weight: 500;
            color: #022f4a;
            word-break: break-word;
            line-height: 1.4;
        }

        /* Special message box - elevated style */
        .message-wrapper {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #eef2f8;
            margin-top: 8px;
            overflow: hidden;
            transition: all 0.2s;
        }

        .message-header {
            background: #fef5ed;
            padding: 12px 20px;
            border-bottom: 2px solid #fe4801;
        }

        .message-header span {
            font-weight: 700;
            font-size: 15px;
            color: #022f4a;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .message-content {
            padding: 22px 24px;
            background-color: #ffffff;
            font-size: 16px;
            color: #1e2f3d;
            line-height: 1.55;
            white-space: pre-wrap;
            word-break: break-word;
        }

        /* Product badge style */
        .product-badge {
            display: inline-block;
            background: #eef2ff;
            padding: 4px 14px;
            border-radius: 40px;
            font-size: 15px;
            font-weight: 500;
            color: #022f4a;
            margin-top: 2px;
        }

        /* CTA / Footer */
        .footer-note {
            margin-top: 36px;
            padding-top: 20px;
            border-top: 1px solid #e9edf2;
            text-align: center;
        }

        .footer-note p {
            font-size: 13px;
            color: #7e8c9e;
            margin-bottom: 8px;
        }

        .timestamp {
            font-size: 12px;
            color: #9aaebf;
            background: #f8fafd;
            display: inline-block;
            padding: 6px 14px;
            border-radius: 50px;
        }

        /* Responsive breakpoints */
        @media (max-width: 600px) {
            .email-container {
                margin: 0 12px;
                border-radius: 28px;
            }

            .email-header {
                padding: 24px 20px;
            }

            .email-header h1 {
                font-size: 24px;
            }

            .email-body {
                padding: 24px 20px 20px 20px;
            }

            .field-row {
                padding: 6px 16px;
                gap: 12px;
            }

            .field-icon {
                width: 36px;
                height: 36px;
                font-size: 18px;
            }

            .field-value {
                font-size: 16px;
            }

            .message-content {
                padding: 18px 20px;
                font-size: 15px;
            }

            .product-badge {
                font-size: 14px;
            }
        }

        @media (max-width: 460px) {
            .field-row {
                flex-direction: column;
                gap: 6px;
                padding: 12px 16px;
            }

            .field-icon {
                margin-bottom: 0px;
            }

            .field-label {
                font-size: 12px;
            }

            .info-grid {
                gap: 16px;
            }
        }

        /* Keep consistent spacing */
        .attribution {
            font-size: 0.1px;
            height: 0;
            opacity: 0;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body style="margin:0; padding:20px 0; background:#eef2f5;">
    <!-- Centered responsive email container -->
    <div style="max-width: 620px; margin: 0 auto; padding: 12px 0 30px 0;">
        <div class="email-container">

            <!-- Modern header with brand accent -->
            <div class="email-header">
                <h1> New inquiry received</h1>
                <p>Lead details from your website contact form</p>
            </div>

            <!-- Main content -->
            <div class="email-body">
                <div class="info-grid">

                    <!-- Name field with icon row -->
                    <div class="field-card">
                        <div class="field-row">
                            <div class="field-icon"></div>
                            <div class="field-content">
                                <div class="field-label">Full name</div>
                                <div class="field-value">{{ $data['name'] }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Email field -->
                    <div class="field-card">
                        <div class="field-row">
                            <div class="field-icon"></div>
                            <div class="field-content">
                                <div class="field-label">Email address</div>
                                <div class="field-value" style="word-break: break-all;">
                                    <a href="mailto:{{ $data['email'] }}"
                                        style="color:#fe4801; text-decoration:none; border-bottom:1px dotted #fe4801;">{{ $data['email'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Phone field with clickable (optional but professional) -->
                    <div class="field-card">
                        <div class="field-row">
                            <div class="field-icon"></div>
                            <div class="field-content">
                                <div class="field-label">Phone number</div>
                                <div class="field-value">
                                    <a href="tel:{{ $data['phone'] }}"
                                        style="color:#022f4a; text-decoration:none; font-weight:500;">{{ $data['phone'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product interested in (subject) with badge style -->
                    <div class="field-card">
                        <div class="field-row">
                            <div class="field-icon"></div>
                            <div class="field-content">
                                <div class="field-label">Product / Service interest</div>
                                <div class="field-value">
                                    <span class="product-badge">{{ $data['subject'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Message section - distinctive professional card -->
                <div style="margin-top: 8px;">
                    <div class="message-wrapper">
                        <div class="message-header">
                            <span>Detailed message</span>
                        </div>
                        <div class="message-content">
                            {{ $data['message'] }}
                        </div>
                    </div>
                </div>

                <!-- Additional info + subtle footer -->
                <div class="footer-note">
                    <div class="timestamp">
                        Submitted via contact form
                    </div>
                    <p style="margin-top: 18px;">This lead was generated from your website contact form.<br>Reply
                        directly to the customer using the email above.</p>
                </div>
            </div>
        </div>
        <!-- tiny spacer for email clients -->
        <div style="height: 10px;"></div>
    </div>
</body>

</html>
