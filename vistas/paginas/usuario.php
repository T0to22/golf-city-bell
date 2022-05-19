<?php

if (!isset($_SESSION)) {
    session_start();
}

if ( !isset($_SESSION['login']) ){
    header("Location: /");
    exit();
}

?>

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
            <h1 class="text-center">Tus Datos</h1>
        </div>

        <div class="card-body">

            <div>
                <p>Estos son los datos que ingresaste al momento de registrarte. Si queres cambiarlos, solamente tenes que reemplazarlos por otros y confirmar los mismos.</p>

            </div>

            <div class="col-sm-12 col-md-8 mx-auto">

                <form action="" method="POST">

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="nombre"> <i class="fa-solid fa-user"></i> </span>
                        <input type="text" class="form-control" placeholder="Tu nombre" aria-label="Tu nombre" aria-describedby="nombre" id="nombre" name="updateNombre" autocomplete="off" value="<?php echo $_SESSION['datos_usuario']['nombre']; ?>">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="email"> <i class="fa-solid fa-at"></i> </span>
                        <input type="text" class="form-control" placeholder="Tu dirección de e-mail" aria-label="Tu dirección de e-mail" aria-describedby="email" id="email" name="updateEmail" autocomplete="off" value="<?php echo $_SESSION['datos_usuario']['email']; ?>">
                    </div>

                    <!-- <div class="input-group mb-3">
                        <span class="input-group-text" id="pwd"> <i class="fa-solid fa-key"></i> </span>
                        <input type="password" class="form-control" placeholder="Tu contraseña" aria-label="Tu contraseña" aria-describedby="pwd" id="pwd" name="updatePWD" value="<?php echo $_SESSION['datos_usuario']['pwd']; ?>">
                        <p>La contraseña solo puede ser cambiada por el administrador. Por favor solicite el reset enviando un email a resetpwd@cgcb.com.ar</p>
                    </div> -->

                    <input type="submit" class="btn btn-outline-success" value="Confirmar Cambios">

                </form>

            </div>

            <?php

                $update = ControladorForms::ctrActualizarDatosUsuario();

            ?>

        </div>


    </section>



</body>

</html>