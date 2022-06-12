@extends('layouts.app')

@section('content')

<div class="container-fluid position-relative p-0">
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" style="height: 50%;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" style="width: 50%;" src="img/playa.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="fw-bold text-primary text-uppercase mb-3 animated slideInDown">Grandes Ofertas de Verano</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Para que lo disfrutes con toda tu familia</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/cocina1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="fw-bold text-primary text-uppercase mb-3 animated slideInDown">Los mejores productos del Hogar</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">La más alta calidad al mejor precio</h1>    
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
                            En "MyHouse" estamos dedicados a distribuir los mejores productos del mercado, siempre 
                            con el mejor precio y una gran atención para nuestros clientes. Como empresa deseamos 
                            que las familias salvadoreñas puedan tener un lugar en donde promocionar y obtener las 
                            mejores ofertas del mercado, ya que el vínculo con nuestros clientes es muy importante 
                            para nosotros, es por ello que como equipo nos comprometemos a ofrecerte: 
                        </p>
                    </div>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Mejores precios.</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Increibles productos.</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Ofertas especiales.</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Estar siempre para tí.</h5>
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
                    <h4 class="text-uppercase mb-3 text-white">Muebles para el hogar</h4>
                    <p>Los muebles de mejor calidad y el mejor estilo disponibles en el mercado</p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <h4 class="text-uppercase mb-3 text-white">Productos de cocina</h4>
                    <p>Los mejores utensilios solo disponibles con nosotros, modernos y prácticos</p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <h4 class="text-uppercase mb-3 text-white">Tecnologia</h4>
                    <p>También estamos a la vanguardia de la tecnología, con lo más nuevo en productos electrónicos</p>

                </div>
            </div>
            <div class="col-lg-12 col-md-6 text-center ">
                <h1 class="text-uppercase text-light mb-4">Hasta 30% de descuento este verano</h1>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container-fluid bg-offer my-5 py-5 wow fadeInUp">
    <div class="container py-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                    <h2 class="text-primary font-secondary">Beneficios por tus compras</h2>
                    <h1 class="display-4 text-uppercase text-white">Sigue comprando con MyHouse</h1>
                </div>
                <p class="text-white mb-4">Compra con nosotros para recibir los increíbles descuentos y promociones que te ofrece nuestra plataforma.</p>
                <a href="{{url('/tienda')}}" class="btn btn-primary border-inner py-3 px-5 me-3 text-white">¡Compra Ya!</a>
                <a href="{{url('contacto')}}" class="btn btn-dark border-inner py-3 px-5">Conocer Más</a>
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
        background: linear-gradient(rgba(187, 102, 49, 0.7), rgba(138, 65, 206, 0.6)), url(../img/sala1.jpg) center center no-repeat;
        background-size: cover;
        z-index: -1;
    }
    
    .bg-offer {
        background: linear-gradient(rgba(17, 57, 117, 0.7), rgba(18, 130, 145, 0.5)), url(../img/sala2.jpg) center center no-repeat;
        background-size: cover;
    }
</style>

@endsection

@section('footer')
    @include('footer')
@endsection