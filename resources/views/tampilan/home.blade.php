@extends('layout.user')

@section('container')
<style>


/*--------------------------------------------------------------
# Frequently Asked Questions
--------------------------------------------------------------*/
.faq .faq-list {
  padding: 0 100px;
}

.faq .faq-list ul {
  padding: 0;
  list-style: none;
}

.faq .faq-list li+li {
  margin-top: 15px;
}

.faq .faq-list li {
  padding: 20px;
  background: #fff;
  border-radius: 4px;
  position: relative;
}

.faq .faq-list a {
  display: block;
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 500;
  padding: 0 30px;
  outline: none;
  cursor: pointer;
}

.faq .faq-list .icon-help {
  font-size: 24px;
  position: absolute;
  right: 0;
  left: 20px;
  color: #76b5ee;
}

.faq .faq-list .icon-show,
.faq .faq-list .icon-close {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 0;
}

.faq .faq-list p {
  margin-bottom: 0;
  padding: 10px 0 0 0;
}

.faq .faq-list .icon-show {
  display: none;
}

.faq .faq-list a.collapsed {
  color: #343a40;
}

.faq .faq-list a.collapsed:hover {
  color: #1977cc;
}

.faq .faq-list a.collapsed .icon-show {
  display: inline-block;
}

.faq .faq-list a.collapsed .icon-close {
  display: none;
}

@media (max-width: 1200px) {
  .faq .faq-list {
    padding: 0;
  }
}


/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  /* padding: 80px 0; */
}

.section-bg {
  background-color: #f2f2f2;
}

.section-title {
  text-align: center;
  padding-bottom: 50px;
}

.section-title h2 {
  font-size: 13px;
  letter-spacing: 1px;
  font-weight: 700;
  padding: 8px 20px;
  margin: 0;
  background: #f5f9fc;
  color: #428bca;
  display: inline-block;
  text-transform: uppercase;
  border-radius: 50px;
}

.section-title h3 {
  margin: 15px 0 0 0;
  font-size: 32px;
  font-weight: 700;
}

.section-title h3 span {
  color: #428bca;
}

.section-title p {
  margin: 15px auto 0 auto;
  font-weight: 500;
  color: #919191;
}

@media (min-width: 1024px) {
  .section-title p {
    width: 50%;
  }
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="{{ URL::asset('Template/img/GEREJA1.jpg') }}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Horas!!</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Selamat Datang Di HKBP Sabungan!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{URL::asset('Template/img/GEREJA2.jpg')}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Horas!!</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Selamat Datang Di HKBP Sabungan!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::asset('Template/img/GEREJA3.jpg') }}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Horas!!</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Selamat Datang Di HKBP Sabungan!</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
       
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 10px solid; border-color: transparent transparent transparent ">
                            <img src="{{ URL::asset('Template/img/GEREJA4.png') }}" class="img-fluid w-10 h-10" alt="">
                        </div>
                    </div>
                    
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), ">
                        <h5 class="section-about-title pe-3">Sejarah Gereja</h5>
                        <h1 class="mb-4">Selamat Datang di HKBP Sabungan Kota</span></h1>
                        <p class="mb-4">Gereja HKBP Sabungan, sebagian dari sejarah gereja di Indonesia, 
                                        berakar dalam perjalanan iman dan perjuangan masyarakat Batak Toba sejak awal abad ke-19.
                                         Meskipun dihadapkan pada tantangan budaya dan sosial, 
                                         pendirian gereja ini pada tahun 1861 menjadi titik awal bagi komunitas yang berkumpul di Sabungan untuk memperkuat iman mereka.</p>
                        <p class="mb-4">Sebagai pusat kegiatan ibadah, sosial, dan pendidikan bagi masyarakat, 
                                        HKBP Sabungan telah menjadi lambang kekuatan iman dan pelayanan dalam menghadapi berbagai cobaan. 
                                        Dengan fondasi sejarah yang kokoh, gereja ini terus menjadi terang bagi dunia sekitarnya, memperkuat komunitasnya,
                                         dan memberkati masyarakat yang dilayaninya.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <div class="container-fluid bg-light service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">FAQ</h5>
                    <h1 class="mb-0">Frequently Asked Question</h1>
                </div>
                <section id="faq" class="faq section-bg">
                    <div class="container">
                    <div class="faq-list">
                        <ul>
                        @php
                            $No = 0;
                        @endphp
                        {{-- @foreach ($faq as $fq) --}}
                        @foreach ($dataFaq as $key => $fq)
                        @php
                            $current = $loop->iteration;
                        @endphp
                        <li data-aos="fade-up" data-aos-delay="{{  $current }}00">
                            <i class="fa fa-question-circle-o	icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{  $current }}">{{ $fq->pertanyaan }}<i class="fa fa-sort-down	icon-show"></i><i class="fa fa-sort-asc icon-close"></i></a>
                            <div id="faq-list-{{  $current }}" class="collapse {{  $current == 1 ? 'show' : '' }}" data-bs-parent=".faq-list-{{  $current }}">
                            <p>
                                {{ $fq->jawaban }}
                            </p>
                            </div>
                        </li>
                        @endforeach
                        </ul>
                    </div>
                
                    </div>
                </section>
            </div>
        </div>

                
        
        <script>
            function toggleAnswer(element) {
                var answer = element.querySelector('.answer');
                if (answer.style.display === "none") {
                    answer.style.display = "block";
                } else {
                    answer.style.display = "none";
                }
            }
        </script>
         
        

       
        

               
@endsection
       
    