<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mush.AI - The Future of AI is Coming</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --theme-color: #8b5cf6;
            --theme-secondary: #06b6d4;
            --accent-pink: #ec4899;
            --bg-dark: #050505;
            --bg-card: #0f0f0f;
            --bg-elevated: #1a1a1a;
            --text-primary: #ffffff;
            --text-secondary: #a1a1aa;
            --text-muted: #71717a;
            --border-color: #27272a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-dark);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: var(--bg-dark);
            overflow: hidden;
        }

        .bg-animation::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(139, 92, 246, 0.12) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(236, 72, 153, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(6, 182, 212, 0.08) 0%, transparent 40%);
            animation: bgMove 25s ease-in-out infinite;
        }

        @keyframes bgMove {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(2%, 2%) rotate(1deg); }
            50% { transform: translate(-1%, 3%) rotate(-1deg); }
            75% { transform: translate(3%, -2%) rotate(2deg); }
        }

        /* Floating Orbs */
        .orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.3;
            z-index: -1;
            animation: float 20s ease-in-out infinite;
        }

        .orb-1 {
            width: 500px;
            height: 500px;
            background: var(--theme-color);
            top: -10%;
            right: -10%;
        }

        .orb-2 {
            width: 400px;
            height: 400px;
            background: var(--accent-pink);
            bottom: 20%;
            left: -10%;
            animation-delay: -7s;
        }

        .orb-3 {
            width: 350px;
            height: 350px;
            background: var(--theme-secondary);
            top: 40%;
            right: 20%;
            animation-delay: -14s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(40px, -40px) scale(1.1); }
            66% { transform: translate(-30px, 30px) scale(0.9); }
        }

        /* Navigation */
        .navbar {
            padding: 1.25rem 0;
            background: rgba(5, 5, 5, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-color);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.75rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--theme-color) 0%, var(--accent-pink) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.5px;
        }

        .navbar-brand span {
            font-weight: 300;
        }

        .nav-link {
            color: var(--text-secondary) !important;
            font-size: 0.9rem;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: var(--text-primary) !important;
        }

        .btn-nav {
            background: transparent;
            border: 1px solid var(--border-color);
            color: var(--text-primary);
            padding: 0.5rem 1.25rem;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-nav:hover {
            border-color: var(--theme-color);
            background: rgba(139, 92, 246, 0.1);
        }

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 100px;
            padding-bottom: 80px;
        }

        .hero-content {
            max-width: 600px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(139, 92, 246, 0.1);
            border: 1px solid rgba(139, 92, 246, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            color: var(--theme-color);
            margin-bottom: 1.5rem;
        }

        .hero-badge i {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .hero-title {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            letter-spacing: -2px;
        }

        .hero-title .gradient-text {
            background: linear-gradient(135deg, var(--theme-color) 0%, var(--accent-pink) 50%, var(--theme-secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.15rem;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
            line-height: 1.7;
        }

        /* Form Card */
        .form-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .form-card h3 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .form-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
        }

        .form-label .required {
            color: #ef4444;
            margin-left: 2px;
        }

        .form-label .optional {
            color: var(--text-muted);
            font-weight: 400;
        }

        .form-control {
            width: 100%;
            padding: 0.875rem 1rem;
            background: var(--bg-elevated);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            color: var(--text-primary);
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--theme-color);
            background: rgba(139, 92, 246, 0.05);
            box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.1);
        }

        .form-control::placeholder {
            color: var(--text-muted);
        }

        .form-control.is-invalid {
            border-color: #ef4444;
        }

        .invalid-feedback {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 0.375rem;
        }

        .form-check {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .form-check-input {
            width: 18px;
            height: 18px;
            margin-top: 2px;
            background: var(--bg-elevated);
            border: 1px solid var(--border-color);
            border-radius: 4px;
            cursor: pointer;
            flex-shrink: 0;
            accent-color: var(--theme-color);
        }

        .form-check-label {
            font-size: 0.85rem;
            color: var(--text-muted);
            line-height: 1.5;
            cursor: pointer;
        }

        .form-check-label a {
            color: var(--theme-color);
            text-decoration: none;
        }

        .form-check-label a:hover {
            text-decoration: underline;
        }

        .btn-submit {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, var(--theme-color) 0%, var(--accent-pink) 100%);
            border: none;
            border-radius: 10px;
            color: #ffffff;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(139, 92, 246, 0.4);
        }

        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-submit:hover::before {
            left: 100%;
        }

        /* Features Grid */
        .features-section {
            padding: 100px 0;
            border-top: 1px solid var(--border-color);
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-header h2 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 2.75rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .section-header p {
            color: var(--text-secondary);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .feature-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            border-color: var(--theme-color);
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: rgba(139, 92, 246, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.25rem;
            font-size: 1.5rem;
            color: var(--theme-color);
        }

        .feature-card h4 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .feature-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 0;
        }

        /* Terms Section */
        .terms-section {
            padding: 100px 0;
            background: var(--bg-card);
            border-top: 1px solid var(--border-color);
        }

        .terms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .term-item {
            background: var(--bg-elevated);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 1.75rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .term-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, var(--theme-color) 0%, var(--accent-pink) 100%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .term-item:hover {
            border-color: var(--theme-color);
            transform: translateX(5px);
        }

        .term-item:hover::before {
            opacity: 1;
        }

        .term-number {
            width: 40px;
            height: 40px;
            background: rgba(139, 92, 246, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            color: var(--theme-color);
            margin-bottom: 1rem;
        }

        .term-item h5 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .term-item p {
            color: var(--text-muted);
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* Privacy Section */
        .privacy-section {
            padding: 100px 0;
            border-top: 1px solid var(--border-color);
        }

        .privacy-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .privacy-visual {
            position: relative;
        }

        .privacy-lock {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, rgba(139, 92, 246, 0.2) 0%, rgba(236, 72, 153, 0.2) 100%);
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            position: relative;
        }

        .privacy-lock::before {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(135deg, var(--theme-color) 0%, var(--accent-pink) 100%);
            border-radius: 32px;
            z-index: -1;
            opacity: 0.5;
        }

        .privacy-lock i {
            font-size: 6rem;
            background: linear-gradient(135deg, var(--theme-color) 0%, var(--accent-pink) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .privacy-points {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .privacy-point {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .privacy-point-icon {
            width: 48px;
            height: 48px;
            background: rgba(139, 92, 246, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--theme-color);
            font-size: 1.25rem;
            flex-shrink: 0;
        }

        .privacy-point h5 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .privacy-point p {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        /* Members Section */
        .members-section {
            padding: 100px 0;
            background: var(--bg-card);
            border-top: 1px solid var(--border-color);
            overflow: hidden;
        }

        .members-marquee {
            position: relative;
            margin-top: 3rem;
        }

        .members-marquee::before,
        .members-marquee::after {
            content: '';
            position: absolute;
            top: 0;
            width: 150px;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }

        .members-marquee::before {
            left: 0;
            background: linear-gradient(90deg, var(--bg-card) 0%, transparent 100%);
        }

        .members-marquee::after {
            right: 0;
            background: linear-gradient(270deg, var(--bg-card) 0%, transparent 100%);
        }

        .marquee-track {
            display: flex;
            gap: 1.5rem;
            animation: marquee 30s linear infinite;
        }

        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .member-card {
            flex-shrink: 0;
            background: var(--bg-elevated);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 1.5rem;
            width: 280px;
            transition: all 0.3s ease;
        }

        .member-card:hover {
            border-color: var(--theme-color);
            transform: translateY(-5px);
        }

        .member-avatar {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--theme-color) 0%, var(--accent-pink) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 1rem;
        }

        .member-card h5 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .member-card p {
            color: var(--text-muted);
            font-size: 0.85rem;
            margin-bottom: 0;
        }

        .member-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            background: rgba(139, 92, 246, 0.1);
            color: var(--theme-color);
            font-size: 0.75rem;
            font-weight: 500;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            margin-top: 0.75rem;
        }

        .members-stats {
            display: flex;
            justify-content: center;
            gap: 4rem;
            margin-top: 4rem;
            padding-top: 3rem;
            border-top: 1px solid var(--border-color);
        }

        .member-stat {
            text-align: center;
        }

        .member-stat h3 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--theme-color) 0%, var(--accent-pink) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.25rem;
        }

        .member-stat p {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        /* Footer */
        .footer {
            background: var(--bg-dark);
            border-top: 1px solid var(--border-color);
            padding: 60px 0 30px;
        }

        .footer-brand {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--theme-color) 0%, var(--accent-pink) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }

        .footer-brand span {
            font-weight: 300;
        }

        .footer-desc {
            color: var(--text-muted);
            font-size: 0.9rem;
            max-width: 300px;
        }

        .footer-links h5 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1.25rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links ul li {
            margin-bottom: 0.75rem;
        }

        .footer-links ul li a {
            color: var(--text-muted);
            font-size: 0.9rem;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links ul li a:hover {
            color: var(--theme-color);
        }

        .footer-bottom {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-bottom p {
            color: var(--text-muted);
            font-size: 0.85rem;
            margin: 0;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: var(--bg-elevated);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-secondary);
            font-size: 1rem;
            transition: all 0.3s;
        }

        .social-links a:hover {
            border-color: var(--theme-color);
            color: var(--theme-color);
            transform: translateY(-3px);
        }

        /* Success Message */
        .success-message {
            text-align: center;
            padding: 3rem 1rem;
        }

        .success-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--theme-color) 0%, var(--accent-pink) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2.5rem;
            box-shadow: 0 10px 40px rgba(139, 92, 246, 0.4);
            animation: scaleIn 0.5s ease 0.2s both;
        }

        @keyframes scaleIn {
            from { transform: scale(0); }
            to { transform: scale(1); }
        }

        .success-title {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .success-text {
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Loading Spinner */
        .spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top-color: #ffffff;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin-right: 8px;
            vertical-align: middle;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Responsive */
        @media (max-width: 991px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .form-card {
                margin-top: 2rem;
            }

            .privacy-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .privacy-visual {
                order: -1;
            }

            .privacy-lock {
                width: 200px;
                height: 200px;
            }

            .privacy-lock i {
                font-size: 4rem;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }

            .section-header h2 {
                font-size: 1.75rem;
            }

            .members-stats {
                flex-direction: column;
                gap: 2rem;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-animation"></div>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Mush<span>.AI</span></a>
            <div class="d-flex align-items-center gap-3">
                <a href="#features" class="nav-link d-none d-md-block">Features</a>
                <a href="#terms" class="nav-link d-none d-md-block">Terms</a>
                <a href="#privacy" class="nav-link d-none d-md-block">Privacy</a>
                <a href="#waitlist" class="btn-nav">Join Waitlist</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Form -->
    <section class="hero-section" id="waitlist">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="hero-badge">
                            <i class="bi bi-stars"></i>
                            Coming Soon
                        </div>
                        <h1 class="hero-title">
                            The Future of <span class="gradient-text">AI</span> is Almost Here
                        </h1>
                        <p class="hero-subtitle">
                            Join thousands of innovators waiting to experience the next generation of artificial intelligence. Be the first to access our revolutionary platform.
                        </p>
                        <div class="d-flex gap-4 mb-4">
                            <div>
                                <h5 class="mb-1">10K+</h5>
                                <small class="text-muted">Waitlist</small>
                            </div>
                            <div>
                                <h5 class="mb-1">50+</h5>
                                <small class="text-muted">Countries</small>
                            </div>
                            <div>
                                <h5 class="mb-1">99%</h5>
                                <small class="text-muted">Satisfaction</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ms-lg-auto">
                    <div class="form-card">
                        @if(session('success'))
                            <div class="success-message">
                                <div class="success-icon">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                                <h3 class="success-title">You're on the list!</h3>
                                <p class="success-text">
                                    Thank you for your interest. We'll notify you as soon as we launch.
                                </p>
                            </div>
                        @else
                            <h3>Join the Waitlist</h3>
                            <p>Secure your spot for early access</p>
                            
                            <form id="waitlistForm" action="{{ route('waitlist.join') }}" method="POST" novalidate>
                                @csrf
                                
                                <div class="form-group">
                                    <label class="form-label">
                                        Full Name <span class="required">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        name="name" 
                                        class="form-control @error('name') is-invalid @enderror" 
                                        placeholder="John Doe"
                                        value="{{ old('name') }}"
                                        required
                                    >
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">
                                        Email Address <span class="required">*</span>
                                    </label>
                                    <input 
                                        type="email" 
                                        name="email" 
                                        class="form-control @error('email') is-invalid @enderror" 
                                        placeholder="john@example.com"
                                        value="{{ old('email') }}"
                                        required
                                    >
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">
                                        Phone Number <span class="optional">(optional)</span>
                                    </label>
                                    <input 
                                        type="tel" 
                                        name="phone" 
                                        class="form-control @error('phone') is-invalid @enderror" 
                                        placeholder="+1 (555) 000-0000"
                                        value="{{ old('phone') }}"
                                    >
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-check">
                                    <input 
                                        type="checkbox" 
                                        name="terms" 
                                        id="terms" 
                                        class="form-check-input @error('terms') is-invalid @enderror"
                                        required
                                        {{ old('terms') ? 'checked' : '' }}
                                    >
                                    <label for="terms" class="form-check-label">
                                        I agree to the <a href="#terms">Terms of Service</a> and 
                                        <a href="#privacy">Privacy Policy</a>
                                    </label>
                                </div>
                                @error('terms')
                                    <div class="invalid-feedback d-block mb-3">{{ $message }}</div>
                                @enderror

                                <button type="submit" class="btn-submit" id="submitBtn">
                                    Join Waiting List
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <div class="section-header">
                <h2>Why Join Mush.AI?</h2>
                <p>Be part of the AI revolution with exclusive benefits for early adopters</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <h4>Early Access</h4>
                        <p>Get exclusive first access to our platform before the public launch. Be among the pioneers.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-gift"></i>
                        </div>
                        <h4>Special Perks</h4>
                        <p>Enjoy lifetime discounts, premium features, and special rewards reserved for waitlist members only.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Secure & Private</h4>
                        <p>Your data is protected with enterprise-grade security. We never share your information with third parties.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Terms of Service Section -->
    <section class="terms-section" id="terms">
        <div class="container">
            <div class="section-header">
                <h2>Terms of Service</h2>
                <p>Clear and transparent guidelines for using our platform</p>
            </div>
            <div class="terms-grid">
                <div class="term-item">
                    <div class="term-number">01</div>
                    <h5>Acceptance of Terms</h5>
                    <p>By accessing our waiting list and services, you agree to be bound by these terms and conditions.</p>
                </div>
                <div class="term-item">
                    <div class="term-number">02</div>
                    <h5>Service Description</h5>
                    <p>Mush.AI provides AI solutions. The waiting list registers interest for early platform access.</p>
                </div>
                <div class="term-item">
                    <div class="term-number">03</div>
                    <h5>User Registration</h5>
                    <p>Provide accurate information when joining. You're responsible for maintaining account confidentiality.</p>
                </div>
                <div class="term-item">
                    <div class="term-number">04</div>
                    <h5>Communication</h5>
                    <p>By joining, you consent to receive updates about product launches and promotional materials.</p>
                </div>
                <div class="term-item">
                    <div class="term-number">05</div>
                    <h5>Privacy Protection</h5>
                    <p>Your privacy matters. We collect and use data as outlined in our Privacy Policy.</p>
                </div>
                <div class="term-item">
                    <div class="term-number">06</div>
                    <h5>Limitation of Liability</h5>
                    <p>Mush.AI is not liable for indirect damages from using our services.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Privacy Policy Section -->
    <section class="privacy-section" id="privacy">
        <div class="container">
            <div class="section-header">
                <h2>Privacy Policy</h2>
                <p>How we protect and handle your personal information</p>
            </div>
            <div class="privacy-content">
                <div class="privacy-visual">
                    <div class="privacy-lock">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="privacy-points">
                    <div class="privacy-point">
                        <div class="privacy-point-icon">
                            <i class="bi bi-person-vcard"></i>
                        </div>
                        <div>
                            <h5>Information Collection</h5>
                            <p>We collect your name, email, and optional phone number when you join our waiting list.</p>
                        </div>
                    </div>
                    <div class="privacy-point">
                        <div class="privacy-point-icon">
                            <i class="bi bi-envelope-check"></i>
                        </div>
                        <div>
                            <h5>How We Use Data</h5>
                            <p>To communicate about Mush.AI updates, launch notifications, and relevant promotions.</p>
                        </div>
                    </div>
                    <div class="privacy-point">
                        <div class="privacy-point-icon">
                            <i class="bi bi-shield-shaded"></i>
                        </div>
                        <div>
                            <h5>Data Security</h5>
                            <p>Enterprise-grade security measures protect your information from unauthorized access.</p>
                        </div>
                    </div>
                    <div class="privacy-point">
                        <div class="privacy-point-icon">
                            <i class="bi bi-hand-thumbs-up"></i>
                        </div>
                        <div>
                            <h5>Your Rights</h5>
                            <p>Access, correct, or delete your data anytime. Opt out of communications when you choose.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Joined Members Section -->
    <section class="members-section" id="members">
        <div class="container">
            <div class="section-header">
                <h2>Join the Community</h2>
                <p>See who's already on board for the AI revolution</p>
            </div>
            <div class="members-marquee">
                <div class="marquee-track">
                    @php
                        $members = [
                            ['name' => 'Sarah Chen', 'role' => 'Tech Entrepreneur', 'initial' => 'SC'],
                            ['name' => 'Marcus Johnson', 'role' => 'AI Researcher', 'initial' => 'MJ'],
                            ['name' => 'Emily Rodriguez', 'role' => 'Product Manager', 'initial' => 'ER'],
                            ['name' => 'David Kim', 'role' => 'Software Engineer', 'initial' => 'DK'],
                            ['name' => 'Lisa Thompson', 'role' => 'Data Scientist', 'initial' => 'LT'],
                            ['name' => 'James Wilson', 'role' => 'Startup Founder', 'initial' => 'JW'],
                            ['name' => 'Anna Petrov', 'role' => 'UX Designer', 'initial' => 'AP'],
                            ['name' => 'Michael Brown', 'role' => 'CTO', 'initial' => 'MB'],
                        ];
                    @endphp
                    
                    @foreach($members as $member)
                        <div class="member-card">
                            <div class="member-avatar">{{ $member['initial'] }}</div>
                            <h5>{{ $member['name'] }}</h5>
                            <p>{{ $member['role'] }}</p>
                            <span class="member-badge"><i class="bi bi-check-circle-fill"></i> Joined</span>
                        </div>
                    @endforeach
                    
                    @foreach($members as $member)
                        <div class="member-card">
                            <div class="member-avatar">{{ $member['initial'] }}</div>
                            <h5>{{ $member['name'] }}</h5>
                            <p>{{ $member['role'] }}</p>
                            <span class="member-badge"><i class="bi bi-check-circle-fill"></i> Joined</span>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div class="members-stats">
                <div class="member-stat">
                    <h3>12,847</h3>
                    <p>Total Members</p>
                </div>
                <div class="member-stat">
                    <h3>156</h3>
                    <p>Countries</p>
                </div>
                <div class="member-stat">
                    <h3>4.9</h3>
                    <p>Avg. Rating</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="footer-brand">Mush<span>.AI</span></div>
                    <p class="footer-desc">
                        Pioneering the future of artificial intelligence. Join us on our journey to transform the way the world works.
                    </p>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Product</h5>
                        <ul>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#waitlist">Waitlist</a></li>
                            <li><a href="#members">Community</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="footer-links">
                        <h5>Legal</h5>
                        <ul>
                            <li><a href="#terms">Terms</a></li>
                            <li><a href="#privacy">Privacy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Mush.AI. All rights reserved.</p>
                <div class="social-links">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-github"></i></a>
                    <a href="#"><i class="bi bi-discord"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Form validation and submission
        document.getElementById('waitlistForm')?.addEventListener('submit', function(e) {
            const btn = document.getElementById('submitBtn');
            btn.disabled = true;
            btn.innerHTML = '<span class="spinner"></span>Processing...';
        });

        // Real-time validation
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });

            input.addEventListener('input', function() {
                if (this.classList.contains('is-invalid')) {
                    validateField(this);
                }
            });
        });

        function validateField(field) {
            const value = field.value.trim();
            let isValid = true;

            if (field.hasAttribute('required') && !value) {
                isValid = false;
            }

            if (field.type === 'email' && value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                isValid = emailRegex.test(value);
            }

            if (isValid) {
                field.classList.remove('is-invalid');
            } else {
                field.classList.add('is-invalid');
            }

            return isValid;
        }
    </script>
</body>
</html>
