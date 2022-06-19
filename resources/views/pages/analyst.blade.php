@extends('layouts.master')

@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Analyst</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Analyst Acne Severity</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="container">
    <form class="contact-form mt-5">
        <div class="row mb-3">
            <div class="col-sm-6 py-2 wow fadeInLeft">
                <label for="fullName">Name</label>
                <input type="text" id="fullName" class="form-control" placeholder="Full name..">
            </div>
            <div class="col-sm-6 py-2 wow fadeInRight">
                <label for="phone">Phone Number</label>
                <input type="number" id="phonenumber" class="form-control" placeholder="082338...">
            </div>
            <div class="col-6 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                <div class="card-doctor">
                    <div class="body">
                        <p class="text-xl mb-0">Input Acne Face</p>
                    </div>
                    <div class="header">
                        <img src="{{ asset('img/doctors/doctor_1.jpg') }}" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <input type="file"></input>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                <div class="card-doctor">
                    <div class="body">
                        <p class="text-xl mb-0">Result Severity</p>
                    </div>
                    <div class="header">
                        <img src="{{ asset('img/doctors/doctor_1.jpg') }}" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Mild</p>
                        <span class="text-sm text-grey">Total Lesion: 15</span>
                    </div>
                </div>
            </div>


            <div class="col-12 py-2 wow fadeInUp">
                <label for="message">Tabel Analisis Epoch dkk disni</label>
                <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
    </form>
</div>
</div>


@endsection