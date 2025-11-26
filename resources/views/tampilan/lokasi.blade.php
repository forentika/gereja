@extends('layout.user')

@section('title', 'Lokasi Kami - GKPI Immanuel')

@section('container')
<!-- Hero Breadcrumb dengan Parallax Effect -->
<div class="container-fluid bg-breadcrumb" style="background-image: url('{{ URL::asset('Template/img/bg1.png')}}');">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Lokasi Kami</h3>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
        </ol>    
    </div>
</div>

<!-- Section Lokasi & Kontak -->
<section class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="row g-5 align-items-stretch">

            <!-- Kolom Informasi Kontak (Kartu Elegan) -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-lg h-100 rounded-4 overflow-hidden">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h3 class="mb-0 text-white"><i class="fas fa-church me-2 text-white"></i> Hubungi Kami</h3>
                    </div>
                    <div class="card-body p-5 bg-white">

                        <!-- Alamat -->
                        <div class="d-flex align-items-start mb-5 animate__animated animate__fadeInLeft">
                            <div class="flex-shrink-0 bg-primary text-white rounded-circle p-3 me-4 shadow">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-primary mb-2">Alamat</h5>
                                <p class="mb-0 text-muted lead">
                                    HH3P+44F, Jl	st. Suka Maju Indah,<br>
                                    Tj. Selamat, Kec. Sunggal,<br>
                                    Kabupaten Deli Serdang,<br>
                                    Sumatera Utara 20351
                                </p>
                            </div>
                        </div>

                        <!-- Telepon -->
                        <div class="d-flex align-items-start mb-5 animate__animated animate__fadeInLeft animation-delay-200">
                            <div class="flex-shrink-0 bg-primary text-white rounded-circle p-3 me-4 shadow">
                                <i class="fas fa-phone-alt fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-primary mb-2">Ponsel</h5>
                                <p class="mb-0">
                                    <a href="tel:082285920152" class="text-decoration-none text-dark fw-bold">0822-8592-0152</a>
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="d-flex align-items-start animate__animated animate__fadeInLeft animation-delay-400">
                            <div class="flex-shrink-0 bg-primary text-white rounded-circle p-3 me-4 shadow">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-primary mb-2">Email</h5>
                                <p class="mb-0">
                                    <a href="mailto:gkpiimmanuel@gmail.com" class="text-decoration-none text-dark fw-bold">
                                        gkpiimmanuel@gmail.com
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- Jam Ibadah (opsional, tambahan) -->
                        <hr class="my-5">
                        <div class="text-center">
                            <h5 class="text-primary fw-bold">Jam Ibadah</h5>
                            <p class="mb-1">Minggu Pagi : <strong>08:00 WIB</strong></p>
                            <p>Ibadah Remaja : <strong>17:00 WIB</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Google Maps -->
            <div class="col-lg-7">
                <div class="rounded-4 shadow-lg overflow-hidden h-100 animate__animated animate__zoomIn">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1502492310433!2d98.58043827719916!3d3.552824187194183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312ff5be00b603%3A0x569a7db48d0223e6!2sGKPI%20IMMANUEL!5e0!3m2!1sid!2sid!4v1764143447802!5m2!1sid!2sid" 
                        width="100%" 
                        height="600" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Tambahkan CSS Custom & Animate.css -->
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
    .bg-breadcrumb { min-height: 80vh; }
    .text-shadow { text-shadow: 2px 2px 10px rgba(0,0,0,0.8); }
    .breadcrumb-light .breadcrumb-item a:hover { opacity: 1 !important; }
    .card { transition: transform 0.3s; }
    .card:hover { transform: translateY(-10px); }
    .animation-delay-200 { animation-delay: 0.2s; }
    .animation-delay-400 { animation-delay: 0.4s; }
    @media (max-width: 768px) {
        .bg-breadcrumb { height: 60vh; }
        iframe { height: 400px !important; }
    }
</style>
@endpush

@push('scripts')
<script>
    // Optional: efek scroll reveal jika ingin lebih dramatis
    document.addEventListener("DOMContentLoaded", function() {
        const elements = document.querySelectorAll('.animate__animated');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__fadeInUp');
                }
            });
        });
        elements.forEach(el => observer.observe(el));
    });
</script>
@endpush
@endsection