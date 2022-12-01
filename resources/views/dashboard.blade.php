<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - MyHouse</title>
    <link rel="stylesheet" href={{ url('css/app.css') }}>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body>
    <div class="container py-5 text-center">
        <div class="card">
            <h5 class="card-header letra">
                { MyHouse }
            </h5>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h5 class="card-title">
                            Listado de productos
                        </h5>
                    </div>
                    <div class="col-md-1">
                        <a href="{{route('dashboard.create')}}" class="btn btn-primary text-white">Agregar</a>
                    </div>
                    <div class="col-md-1">
                        <a href="{{route('dashboard.upload')}}" class="btn btn-primary text-white">Imagen</a>
                    </div>
                    <div class="col-md-2">
                        <form action="/logout" method="POST" style="display: inline;">
                            @csrf
                            <a href="#" onclick="this.closest('form').submit()" class="btn btn-danger text-white">Cerar sesion</a>
                        </form>
                    </div>
                </div>
                @if ($mensaje = Session::get('success'))
                    <hr>
                    <div class="alert alert-info" role="alert">
                        {{$mensaje}}
                    </div>
                @endif

                <p class="card-text">
                    <div class="table table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Descripción</th>
                                <th>Categoria</th>
                                <th>Imagen-Path</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($datos as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>${{$item->price}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->category_id}}</td>
                                        <td>{{$item->image_path}}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form action="{{route('dashboard.edit', $item->id)}}" method="Get">
                                                        <button class="btn btn-success w-100">Editar</button>
                                                    </form>
                                                </div>

                                                <div class="col-md-6">
                                                    <form action="{{ route('dashboard.destroy', $item->id)}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger w-100">Eliminar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </p>
            </div>
        </div>
    </div>


    <style>
        @font-face {
			font-family: myhouse;
			src: url('../css/aAlleyGarden.ttf');
		}

        .letra {
            background: #fff;
            color: rgb(226, 117, 14);
			font-size: 46px;
			font-family: myhouse;
        }

    </style>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>

