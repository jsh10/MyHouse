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


@endsection

@section('footer')
    @include('footer')
@endsection