@extends('layouts.app')

@section('content')

<div class="container-fluid position-relative p-0">
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" style="height: 50%;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" style="width: 50%;" src="img/5.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">MyHouse Slider #1</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Espacio promocional de MyHouse #1</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">MyHouse Slider #2</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Espacio Promocional de MyHouse #2</h1>    
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">siguiente</span>
            </button>
        </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="position-relative pb-3 mb-5" style="margin-bottom: 0px;">
                    <h5 class="fw-bold text-primary text-uppercase">Sobre nosotros</h5>
                    <h1 class="mb-0">Nuestro compromiso contigo.</h1><br>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <p class="mb-4 text-justify" style="margin-top:0px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis metus sed nulla porta suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue diam vitae enim pharetra, ut varius dui vestibulum. Donec rutrum mi sit amet arcu
                            varius cursus. Praesent tincidunt nisi sem. Proin ac risus tristique, sollicitudin lorem vitae, dignissim nulla. Ut non velit laoreet, placerat sem vitae, porttitor urna. Nulla tincidunt elementum augue, non laoreet metus venenatis
                            a.
                        </p>
                    </div>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Compromiso 1</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Compromiso 2</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Compromiso 3</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Compromiso 4</h5>
                        </div>
                    </div>

                    <a href="{{url('contacto')}}" class="btn btn-primary py-3 w-100 px-5 mt-3 wow zoomIn text-center" data-wow-delay="0.9s" style="color:white; font-weight: bold;">Contacta con nosotros</a>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/header.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container-fluid service position-relative px-5 py-5 mt-5 wow fadeInUp" style="margin-bottom: 135px;">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <h4 class="text-uppercase mb-3 text-white">Birthday Cake</h4>
                    <p>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo amet tempor amet kasd lorem dolor ipsum</p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <h4 class="text-uppercase mb-3 text-white">Wedding Cake</h4>
                    <p>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo amet tempor amet kasd lorem dolor ipsum</p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <h4 class="text-uppercase mb-3 text-white">Custom Cake</h4>
                    <p>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo amet tempor amet kasd lorem dolor ipsum</p>

                </div>
            </div>
            <div class="col-lg-12 col-md-6 text-center ">
                <h1 class="text-uppercase text-light mb-4">30% Discount For This Summer</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-offer my-5 py-5">
    <div class="container py-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                    <h2 class="text-primary font-secondary">Special Kombo Pack</h2>
                    <h1 class="display-4 text-uppercase text-white">Super Crispy Cakes</h1>
                </div>
                <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                <a href="" class="btn btn-primary border-inner py-3 px-5 me-3">Shop Now</a>
                <a href="" class="btn btn-dark border-inner py-3 px-5">Read More</a>
            </div>
        </div>
    </div>
</div>


<style>
    .service::after {
        position: absolute;
        content: "";
        width: 100%;
        height: calc(100% - 45px);
        top: 135px;
        left: 0;
        background: linear-gradient(rgba(187, 102, 49, 0.7), rgba(138, 65, 206, 0.6)), url(../img/header.jpg) center center no-repeat;
        background-size: cover;
        z-index: -1;
    }
    
    .bg-offer {
        background: linear-gradient(rgba(17, 57, 117, 0.7), rgba(18, 130, 145, 0.5)), url(../img/5.jpg) center center no-repeat;
        background-size: cover;
    }
</style>

@endsection

@section('footer')
    @include('footer')
@endsection