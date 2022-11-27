@extends('layouts.app')

@section('ar')
<div class="container-fluid position-relative p-0">
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Contactenos</h1>
                </div>
            </div>
        </div>
</div>
@endsection

@section('content')
<div class="container-fluid position-relative p-0">
    <!-- Contact Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"></h5>
                            <h4 class="text-primary mb-0">+503 7344-0004</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"></h5>
                            <h4 class="text-primary mb-0">MyHouse@gmail.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"></h5>
                            <h4 class="text-primary mb-0">San Miguel, El Salvador</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp card" data-wow-delay="0.3s">
                    <h1 class="text-center" style="margin:25px;">A un solo toque.</h1>
                <form action="{{url('/envio1')}}" method="GET">
                        <div class="row g-3" style="margin-top: 10px; margin-bottom:10px;">
                            <div class="col-md-6">
                                <label>Nombre completo:</label>
                                <input type="text" class="form-control border-0 bg-light px-4" id="nombre" pattern="[a-zA-Z áéíóúÁÉÍÓÚ]{2,85}" onchange="toggleButton()"
                                placeholder="Ejm: Ariadne Soto" title="No se puede utilizar numeros o caracteres como #/*-+" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <label>Correo electronico:</label>
                                <input type="email" class="form-control border-0 bg-light px-4" id="email" placeholder="myHouse@gmail.com"
                                onchange="toggleButton()" style="height: 55px;">
                            </div>
                            <div class="col-12">
                            <label>Asunto del mensaje:</label>
                                <input type="text" class="form-control border-0 bg-light px-4 text-center" id="asunto" pattern="[a-zA-Z áéíóúÁÉÍÓÚ1-9]{2,85}"
                                placeholder="¡Me encanta MyHouse!" onchange="toggleButton()" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <label>Mensaje:</label>
                                <textarea class="form-control border-0 bg-light px-4 py-0" rows="4" id="mensaje"
                                   pattern="[a-zA-Z áéíóúÁÉÍÓÚ1-9]{2,255}" onchange="toggleButton()"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" id="checkButton" style="border-radius:50px; margin-bottom:10px; color:#fff;" type="submit" disabled>Enviar mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">

                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3157.3557260336656!2d-88.19423708517243!3d13.488960090517944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7b2a58d2095515%3A0xfb0914d1181e605f!2sUniversidad%20Gerardo%20Barrios!5e1!3m2!1ses!2ssv!4v1653614189918!5m2!1ses!2ssv"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</div>

<script>
    function toggleButton()
        {
            var nombre = document.getElementById('nombre').value;
            var correo = document.getElementById('email').value;
            var asunto = document.getElementById('asunto').value;
            var mensaje = document.getElementById('mensaje').value;

            if (nombre && correo && asunto && mensaje) {
                document.getElementById('checkButton').disabled = false;
            } else {
                document.getElementById('checkButton').disabled = true;
            }
    }
</script>

@endsection

@section('footer')
    @include('footer')
@endsection
