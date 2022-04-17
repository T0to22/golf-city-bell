<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Club Hipico y de Golf City Bell</title>
	<link rel="shortcut icon" href="vistas/img/icono.ico" type="image/x-icon">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="/vistas/css/base.css">
</head>

<body>

	<header>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="menu">

			<div class="container-fluid">

				<img src="/vistas/img/hipico-blanco.png" alt="Logo Club Hipico y de Golf City Bell" id="logo_club" class="navbar-brand">

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu_principal" aria-controls="menu_principal" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="menu_principal">

					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="index.php?path=inicio"> <i id="icono" class="fa-solid fa-house fa-xs"></i> Inicio</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="index.php?path=golf"> <i class="fa-solid fa-golf-ball-tee"></i> Golf</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="index.php?path=contacto"> <i id="icono" class="fa-solid fa-id-card-clip fa-xs"></i> Contacto</a>
						</li>

					</ul>

					<div class="d-flex">

						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link" href="index.php?path=registro"> <i id="icono" class="fa-solid fa-user-plus fa-xs"></i> Registro</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index.php?path=enconstruccion"> <i id="icono" class="fa-solid fa-arrow-right-to-bracket fa-xs"></i> Login</a>
							</li>
						</ul>

					</div>

				</div>

			</div>
		</nav>

	</header>

	<section class="container my-5 container-fluid" id="contenido">

		<?php

		if (isset($_GET['path'])) {

			if ($_GET['path'] == 'inicio' || $_GET['path'] == 'golf' || $_GET['path'] == 'registro' || $_GET['path'] == 'contacto' || $_GET['path'] == 'enconstruccion') {

				include 'vistas/paginas/' . $_GET['path'] . '.php';
			} else {

				include 'vistas/paginas/404.php';
			}
		} else {
			include 'vistas/paginas/inicio.php';
		}

		?>

	</section>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>