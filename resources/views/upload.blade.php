<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Agregar - Dashboard</title>
    <link rel="stylesheet" href="../css/Registro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body class="body">
        <div class="containerbet py-5 bg-white">
            <h1 class="text-center">{ Agregar imagen }</h1>
            <div class="container" style="padding: 20px;">
                <form action="{{ route('dashboard.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="margin-top: 14px; margin-bottom:14px;">
                        <div class="col-md-12">
                            <input type="file" class="form-control text-center" name="file" id="file">
                        </div>
                    </div>
                    <div class="col-md-12 py-2">
                        <button type="submit" id="checkButton"  name="" class="btn btn-success w-100">Subir Imagen</button>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('dashboard.index')}}" class="btn btn-primary w-100">Cancelar</a>
                    </div>
                </form>

            </div>


        </div>

    <!-- Estilos -->
    <style>
        @font-face {
            font-family: myhouse;
            src: url('../css/aAlleyGarden.ttf');
        }
        .containerbet h1 {
            color: rgb(226, 117, 14);
            font-size: 46px;
            font-family: myhouse;
        }

        .containerbet {
            position: absolute;
            width: 40%;
            height: auto;
            left: 50%;
            top: 50%;
            /*background: rgb(70, 8, 151);*/
            transform: translateX(-50%) translateY(-50%);

        }


        .containerbet a:hover {
            color: rgb(255, 255, 255);
        }
        .containerbet input {
            background: rgba(225, 244, 252, 0.808);
            height: 50px;
            margin-top: 5px;
        }
        .roun{
            border-radius: 50px;
            font-weight: bold;
        }
        .bg-offer {
            background: linear-gradient(rgba(17, 57, 117, 0.7), rgba(18, 130, 145, 0.5)), url(../images/sala1.jpg) center center no-repeat;
            background-size: cover;
            min-height: 45px;
        }
        .reg{
            color: rgb(161, 184, 179);
            position: absolute;
            padding-bottom: 25px;
            bottom: 0;
            left:0;
            right:0;
            font-weight: bold;
            text-decoration: none;
        }
    </style>

    <script>
        function toggleButton()
            {
                var name = document.getElementById('fullName').value;


                if (name && email && password && confirmPassword) {
                    document.getElementById('checkButton').disabled = false;
                } else {
                    document.getElementById('checkButton').disabled = true;
                }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
