@extends('layouts.app')


@section('ar')
<div class="container-fluid position-relative p-0">
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Detalles de compras</h1>
                </div>
            </div>
        </div>
</div>
@endsection
@section('content')
    <div class="container" style="margin-top: 60px">
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif

        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif

        @if(count($errors) > 0)
            @foreach($errors0>all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-7 card">
                <br>
                @if(\Cart::getTotalQuantity()>0)
                    <h4>Productos en el carrito: {{ \Cart::getTotalQuantity()}} </h4><hr>
                @else
                    <h4 class="text-center">No hay producto(s) en su carrito</h4><br>
                    <a href="/tienda" class="btn btn-dark">Ir a la tienda</a><br>
                @endif

                @foreach($cartCollection as $item)
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="/images/{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">
                        </div>
                        <div class="col-lg-5">
                            <p>
                                <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                                <b>Price: </b>${{ $item->price }}<br>
                                <b>Sub Total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                                {{--<b>With Discount: </b>${{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
                            </p>
                        </div>

                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-md-8">    
                                    <form action="{{ route('cart.update') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                                <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
                                                    id="quantity" name="quantity" style="width: 100%; margin-right: 10px; text-align:center;">
                                            </div>

                                            <div class="col-md-6">
                                                <button class="btn btn-secondary btn-sm" style="margin-right: 10px; width:90%;"><i class="fa fa-edit"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                <div class="col-md-4">
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                        <button class="btn btn-danger btn-sm" style="width:100%;"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach

                @if(count($cartCollection)>0)
                    <form action="{{ route('cart.clear') }}" method="POST">
                        {{ csrf_field() }}
                        <button class="btn btn-success btn-md w-100">Borrar Carrito</button>
                    </form><br>
                @endif
            </div>

            @if(count($cartCollection)>0)
                <div class="col-lg-5">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>
                        </ul>
                    </div>
                    <br><div class="row" style="padding-right: 25px; padding-left:25px;">
                        <div class="col">
                            <a href="/tienda" class="btn btn-dark" style="width: 100%;">Continuar en la tienda</a>
                        </div>
                        <div class="col">
                            <a href="/checkout" class="btn btn-secondary" style="width: 100%;">Checkout</a></div>
                        </div>
                </div>
            @endif
        </div>
        <br><br>
    </div>

    <!-- Librerias JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Javascript -->
    <script src="js/main.js"></script>

@endsection