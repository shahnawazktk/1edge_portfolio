<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas - CRITICAL FOR RESPONSIVE DESIGN -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=5, user-scalable=yes" />
  <!-- Site Metas -->
  <meta name="keywords" content="school, education, management, 1edge" />
  <meta name="description" content="1Edge School System - Smart Education Management" />
  <meta name="author" content="1Edge" />

  <title>@yield('title', '1Edge Innovation')</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />
  <!-- responsive utilities -->
  <link href="{{asset('assets/css/responsive-utils.css')}}" rel="stylesheet" />

  <style>
    /* Fix footer to bottom of page properly */
    html, body {
      height: 100%;
    }
    
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    
    .main-content {
      flex: 1;
    }
    
    /* Ensure footer stays at bottom */
    .info_section,
    .footer_section {
      margin-top: auto;
    }
  </style>

  @stack('styles')
</head>

<body class="@yield('body_class')">
  
  @include('layouts.navbar')

  <main class="main-content">
    @yield('content')
  </main>

  @include('layouts.footer')

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  
  @stack('scripts')
</body>

</html>
