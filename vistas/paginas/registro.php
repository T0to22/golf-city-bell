<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link rel="stylesheet" href="/vistas/css/registro.css">

</head>

<body>

    <section class="card text-center" id="registro">

        <div class="card-header">
            <h1 class="text-center">Registro en el Club</h1>
        </div>

        <div class="card-body">

            <div>
                <p>Completa el formulario para darte de alta en el club.</p>

            </div>

            <div class="col-sm-12 col-md-8 mx-auto">

                <form action="" method="POST">

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="usuario"> <i class="fa-solid fa-user"></i> </span>
                        <input type="text" class="form-control" placeholder="Tu usuario" aria-label="Tu usuario" aria-describedby="usuario" id="usuario" name="registroUsuario" autocomplete="off">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="email"> <i class="fa-solid fa-at"></i> </span>
                        <input type="text" class="form-control" placeholder="Tu dirección de e-mail" aria-label="Tu dirección de e-mail" aria-describedby="email" id="email" name="registroEmail" autocomplete="off">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="pwd"> <i class="fa-solid fa-key"></i> </span>
                        <input type="password" class="form-control" placeholder="Tu contraseña" aria-label="Tu contraseña" aria-describedby="pwd" id="pwd" name="registroPWD">
                    </div>

                    <input type="submit" class="btn btn-outline-success" value="Confirmar Registro">



                </form>


            </div>

            <?php

            $registro = ControladorForms::ctrRegistroUsuario();

            ?>

        </div>


    </section>



</body>

</html>