<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="shortcut icon" href="img/fav.png">

	<title>MyHouse - Login</title>

	<!-- Fuentes importadas de Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Librerias de iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Librerias de estilos -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Zona de preloader tipo Spinner -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Fin -->

	<body style="background-color: rgb(196, 227, 248);">

        <div class="containerbet text-center">
			<div class="card">
				<div class="row g-0">

					<div class="col-md-5 card rounded-start bg-offer">
						<!--<div class="panda">
							<img src="../images/panda.png" alt="Panda" width="120%">
						</div>-->

						<p class="abajo">
							@myhouse
                        </p>
					</div>
					<div class="col-md-7 card-body">

						<div class="container py-5" style="padding: 25px;">
							<h1> { Bienvenido }</h1> <br>

                            <form  method="POST">
                                @csrf
                                <input type="email" required autofocus class="form-control text-center" name="email" id="email" placeholder="Ingrese su email" onchange="toggleButton()"><br>

                                <input type="password" required class="form-control text-center" require name="password" id="password" placeholder="Ingrese su contraseña" onchange="toggleButton()"><br>

                                <label class=""><input type="checkBox" name="remember"> Recordar Sesión</label>
                                <button type="submit" class="btn btn-primary w-100 roun" name="checkbutton" id="checkButton" disabled>Iniciar</button>
							</form>

							<br>


						</div>

					</div>
				</div>
			</div>

		</div>
        <div class="abajo">
            @if (session('status'))
                <div class="alert alert-danger" role="alert">
                    {{session('status')}}
                </div>
            @endif
        </div>
	</body>


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
			width: 50%;
			height: auto;
			left: 50%;
			top: 50%;
			transform: translateX(-50%) translateY(-50%);
		}


		.containerbet a:hover {
			color: rgb(207, 239, 253);
		}
		.roun{
			border-radius: 50px;
            background: rgb(21, 121, 187);
            border-color: rgb(21, 121, 187);
			font-weight: bold;
		}


		.bg-offer {
			background: linear-gradient(rgba(17, 57, 117, 0.7), rgba(18, 130, 145, 0.4)), url(/img/header.jpg) center center no-repeat;
			background-size: cover;
			min-height: 55px;
		}
		.abajo{
            text-align: center;
			color: rgb(255, 255, 255);
			position: absolute;
			padding-bottom: 25px;
			bottom: 0;
			left:0;
			right:0;
			text-decoration: none;
            font-weight: bold;
		}

		.notification{
            width: 50%;
            left: 50%;
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-20%, -20%);
			-webkit-transform: translate(-50%, -50%);
		}


	</style>

	<!-- Validación base -->

	<script>
		function toggleButton()
			{
				var email = document.getElementById('email').value;
				var password = document.getElementById('password').value;

				if (email && password) {
					document.getElementById('checkButton').disabled = false;
				} else {
					document.getElementById('checkButton').disabled = true;
				}
		}
	</script>


    <!-- Librerias JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
