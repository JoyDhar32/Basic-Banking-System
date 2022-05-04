
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  
  <title>@yield('title')</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Educenter HTML Template v1.0">


  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css') }}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css') }}">
  <!-- aos -->
  <link rel="stylesheet" href="{{ asset('plugins/aos/aos.css') }}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{ asset('plugins/venobox/venobox.css') }}">

  <!-- Main Stylesheet -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('') }}images/logo.png" type="image/x-icon">
  <link rel="icon" href="{{ asset('') }}images/logo.png" type="image/x-icon">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>

<body>

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->

  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="logo" style="max-width:80px;"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item {{ request()->is('clients') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('clients') }}">Clients</a>
            </li>
            <li class="nav-item {{ request()->is('history') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('history') }}">History</a>

            </li>
            <li class="nav-item {{ request()->is('blogs') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('blogs') }}">Blogs</a>

              </li>
              <li class="nav-item {{ request()->is('faq') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
              </li>
            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('contact') }}">CONTACT US</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>

@yield('body')

<footer>
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright &copy;
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>
            , designed & developed by <a href="https://joyustcian.com/" class="text-muted">Joy Dhar</a>
          </p>
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.facebook.com/profile.php?id=100007957393219/"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://twitter.com/JoyDhar92552514"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://github.com/JoyDhar32"><i class="ti-github text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.instagram.com/joyustcian/"><i class="ti-instagram text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- slick slider -->
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<!-- aos -->
<script src="{{ asset('plugins/aos/aos.js') }}"></script>
<!-- venobox popup -->
<script src="{{ asset('plugins/venobox/venobox.min.js') }}"></script>
<!-- filter -->
<script src="{{ asset('plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<!-- google map -->

<!-- Main Script -->
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
