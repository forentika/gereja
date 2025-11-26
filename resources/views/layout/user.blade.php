<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="">
  <meta name="description" content="">

{{-- cssku --}}
  <link rel="stylesheet" href="{{ URL::asset('Aku/aku.css') }}">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="{{URL::asset('Template/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('Template/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{URL::asset('Template/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="{{URL::asset('Template/css/style.css')}}" rel="stylesheet">
</head>
<body>
   <!-- Spinner Start -->
   <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-primary px-5 d-none d-lg-block">
  <div class="row gx-0">
      <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center" style="height: 45px;">
              <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
              <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
              <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
          </div>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <div class="dropdown">
            <a href="/admin/login" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-sign-in-alt me-2"></i> Login</small></a>
            <div class="dropdown-menu rounded">
                <a href="/admin/login" class="dropdown-item"><i class=" fas fa-user-alt me-2"></i> Admin</a>
            </div> 
      </div>
      </div>
  </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
  <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
      <a href="/" class="navbar-brand p-0">
          <h1 class="m-0"><i class="fas fa-church me-3" style="font-size: 1.5rem;"></i>GKPI IMMANUEL</h1>
          {{-- <img src="{{URL::asset('Template/img/logo.png')}}" alt="Logo">  --}}
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
              <a href="/" class="nav-item nav-link">Home</a>
              <a href="/warta" class="nav-item nav-link ">Warta</a>
              <a href="/jadwalibadah" class="nav-item nav-link ">Jadwal Ibadah</a>
              <a href="/donasi" class="nav-item nav-link ">Donasi</a>
              <a href="/galeri" class="nav-item nav-link ">Galeri</a>
              <a href="/datajemaat" class="nav-item nav-link ">Data Jemaat</a>
              <a href="/profile" class="nav-item nav-link ">Profil</a>
              <a href="/lokasi" class="nav-item nav-link ">Lokasi</a>
          </div>
      </div>
  </nav>
</div>


    <div class="carousel-header">
      @yield('container')
    </div>


<!-- Navbar & Hero End -->


<!-- Footer Start -->
<div class="container-fluid footer py-5">
  <div class="container py-5">
      <div class="row g-5">
          <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="footer-item d-flex flex-column">
                  <h4 class="mb-4 text-white">Get In Touch</h4>
                  <a href=""><i class="fas fa-home me-2"></i> 123 Street, New York, USA</a>
                  <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                  <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                  <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                  <div class="d-flex align-items-center">
                      <i class="fas fa-share fa-2x text-white me-2"></i>
                      <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                      <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="footer-item d-flex flex-column">
                  <h4 class="mb-4 text-white">Useful links</h4>
                  <a href=""><i class="fas fa-angle-right me-2"></i> Warta</a>
                  <a href=""><i class="fas fa-angle-right me-2"></i> Layanan</a>
                  <a href=""><i class="fas fa-angle-right me-2"></i> Profil</a>
                  <a href=""><i class="fas fa-angle-right me-2"></i> Lokasi</a>
                  <a href=""><i class="fas fa-angle-right me-2"></i> Contact</a>
              </div>
          </div>

      </div>
  </div>
</div>
<!-- Copyright Start -->
<div class="container-fluid copyright text-body py-4">
  <div class="container">
      <div class="row g-4 align-items-center justify-content-center">
          <div class="col-12 text-center mb-md-0">
              <i class="fas fa-copyright me-2"></i>2024 GKPI IMMANUEL MEDAN
          </div>
      </div>
  </div>
</div>
<!-- Copyright End -->

<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   


  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{URL::asset('Template/lib/easing/easing.min.js')}}"></script>
  <script src="{{URL::asset('Template/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{URL::asset('Template/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('Template/lib/lightbox/js/lightbox.min.js')}}"></script>

  <!-- Template Javascript -->
  <script src="{{URL::asset('Template/js/main.js')}}"></script>
</body>
</html>
