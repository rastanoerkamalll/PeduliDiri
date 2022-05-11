<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('')}}node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="{{ asset('')}}node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="{{ asset('')}}node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('')}}node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('')}}assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('')}}assets/css/components.css">
</head>

<body>
    <div id="app">
      <div class="main-wrapper">
        <div class="navbar-bg" style="background-color: #000102"></div>
        @include('layout.navbar')
        <div class="main-sidebar">
          @include('layout.sidebar')
        </div>

        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-header">
              <h1>@yield('title-card')</h1>

              @if (request()->is('cari') || request()->is('urutkan'))
                <div class="section-header-breadcrumb">
                  <a href="/dashboard" class="btn outline-success my-2 my-sm-0 mx-0" id="buttonSearch" type="submit">
                    <i class="fas fa-arrow-left" ></i>
                  </a>
                </div>
              @endif
            </div>

            <div class="section-body">
                @yield('section')
            </div>
          </section>
        </div>
        <footer class="main-footer">
          <div class="footer-left">

          </div>
          <div class="footer-right">

          </div>
        </footer>
      </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('')}}assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{ asset('')}}assets/js/scripts.js"></script>
    <script src="{{ asset('')}}assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
  </body>
</html>
