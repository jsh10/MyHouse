@extends('layouts.app')

@section('ar')
<div class="container-fluid position-relative p-0">
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Tienda</h1>
                    <a href="" class="h5 text-white">Inicio</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Tienda</a>
                </div>
            </div>
        </div>
</div>
@endsection
@section('content')
    <div class="container wow slideInUp" style="margin-top: 60px">

        <div class="row justify-content-center">
            <div class="col-lg-12">

                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                            <div class="card overflow-hidden" style="margin-bottom: 20px; height: auto;">
                            <br>
                                <img src="/images/{{ $pro->image_path }}"
                                     class="card-img-top mx-auto img-fluid"
                                     style="height: 150px; width: 150px;display: block;"
                                     alt="{{ $pro->image_path }}">

                                <div class="card-body">
                                    <a href="#"><h6 class="card-title text-center">{{ $pro->name }}</h6></a>
                                    <p>Precio: ${{ $pro->price }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">

                                              <div class="row">
                                                <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i>Agregar al carrito</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('footer')
@endsection
