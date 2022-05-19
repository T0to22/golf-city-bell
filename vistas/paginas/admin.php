<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['login'])) {
    header("Location: /");
    exit();
}

if ($_SESSION['datos_usuario']['tipo_usuario'] !== 'admin') {
    header("Location: /");
    exit();
}

$usuarios = ControladorForms::ctrSeleccionarUsuarios();

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
            <h1 class="text-center">Administracion de Usuarios</h1>
        </div>

        <div class="card-body">

            <div>
                <p>Estos son los datos de todos los registrados en la web.</p>

            </div>

            <div class="col-sm-12 col-md-8 mx-auto">

                <table class="table table-hover" id="tabla_usuarios">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tipo de Usuario</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($usuarios as $key => $dato) : ?>

                            <tr>
                                <td class="align-middle"> <?php echo ($key + 1) ?> </td>
                                <td class="align-middle"> <?php echo $dato['nombre'] ?> </td>
                                <td class="align-middle"> <?php echo $dato['email'] ?> </td>
                                <td class="align-middle"> <?php echo $dato['tipo'] ?> </td>
                                <td class="align-middle">
                                    <?php if ($dato['tipo'] !== 'admin') : ?>

                                        <div class="row">
                                            <div class="col m-0 p-0">
                                                <form method="post" id="blanquearPWD">
                                                    <button type="submit" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-key"></i></button>
                                                </form>
                                            </div>
                                            <div class="col m-0 p-0">
                                                <form method="post" id="eliminarUsuario">
                                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                                                </form>
                                            </div>
                                        </div>

                                    <?php endif ?>
                                </td>
                            </tr>

                        <?php endforeach ?>

                    </tbody>
                </table>

            </div>

        </div>

    </section>

</body>

</html>