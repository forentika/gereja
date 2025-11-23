@extends('layout.user')

@section('container')
    
 <!-- Tour Booking Start -->
 <div class="container-fluid booking py-5"style="background-image: url('{{ URL::asset('Template/img/sore2.jpg')}}')">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">Booking</h5>
                <h1 class="text-white mb-4">Online Booking</h1>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                </p>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                </p>
                <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a>
            </div>
            <div class="col-lg-6">
                <h1 class="text-white mb-3">Book A Tour Deals</h1>
                <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure Trip With Travela. Get More Deal Offers Here.</p>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-white border-0" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <!-- Pemotongan kode form untuk kejelasan -->
                        <!-- ... -->
                        <!-- Akhir pemotongan kode form -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tour Booking End -->

@endsection <!-- End Section 'container' -->
