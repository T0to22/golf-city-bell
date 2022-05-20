<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

    <link rel="stylesheet" href="/vistas/css/contacto.css">

</head>

<body>

    <section class="card text-center" id="contacto">

        <div class="card-header">
            <h1 class="text-center">Escribinos</h1>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-sm-12 col-md-12 col-xl-6 mx-auto">

                    <div>
                        <h3 class="mb-3">Club Hipico y de Golf de City Bell</h3>
                        <p class="my-2"> <i class="fa-solid fa-location-dot text-danger"></i>&nbsp; <a href="https://www.google.com/maps/dir//-34.8634661,-58.0462073/@-34.8635355,-58.0462382,20.75z/data=!4m2!4m1!3e0" target="_blank" rel="noopener noreferrer" id="links"> Calle Labougle y 10, City Bell. Buenos Aires. Argentina.</a></p>
                        <p class="my-2"> <i class="fa-solid fa-phone text-success"></i>&nbsp;+54 221 480 0169</p>
                        <p class="my-2"> <i class="fa-solid fa-at text-info"></i>&nbsp;<a href="mailto:clubhipicoydegolfcb@gmail.com" id="links" target="_blank" rel="noopener noreferrer">clubhipicoydegolfcb@gmail.com</a></p>

                    </div>

                    <hr>

                    <h4 class="text-center mt-3">Formulario de contacto</h4>

                    <form method="post" id="formularioContacto">

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="nombreApellido"> <i class="fa-solid fa-signature"></i></span>
                            <input type="text" class="form-control" placeholder="Tu nombre y apellido" aria-label="Tu nombre y apellido" aria-describedby="nombreApellido" name="contactoNombreApellido">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="email"> <i class="fa-solid fa-at"></i></span>
                            <input type="text" class="form-control" placeholder="Tu dirección de e-mail" aria-label="Tu dirección de e-mail" aria-describedby="email" name="contactoEmail">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="telefono"> <i class="fa-solid fa-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Tu número de teléfono" aria-label="Tu número de teléfono" aria-describedby="telefono" name="contactoTelefono">
                        </div>

                        <div>
                            <textarea class="form-control" id="mensaje" rows="5" placeholder="Tu mensaje" name="contactoMensaje"></textarea>
                        </div>

                        <div class="my-2">
                            <input type="submit" class="btn btn-outline-success" value="Enviar Mensaje">
                        </div>

                    </form>

                    <?php
                    $envioMail = ControladorMails::EnviarMail();
                    ?>

                </div>

                <div class="col-sm-12 col-md-12 col-xl-6 mx-auto">

                    <img src="/vistas/img/contacto.jpg" alt="Club Hipico y de Golf City Bell" id="foto1" class="img-fluid img-thumbnail">

                </div>

            </div>

        </div>

        <div class="card-footer text-muted">

            <div class="row">

                <div class="col-sm-12 col-md-6">
                    <a href="https://www.facebook.com/Club-Hipico-y-de-Golf-City-Bell-182076338483120" target="_blank" rel="noopener noreferrer"><img src="/vistas/img/facebook.svg" alt="Facebook" id="redes_sociales"></a>
                </div>

                <div class="col-sm-12 col-md-6">
                    <a href="https://www.instagram.com/golfcitybell/" target="_blank" rel="noopener noreferrer" class="m-0"><img src="/vistas/img/instagram.svg" alt="Instagram" id="redes_sociales" class="m-0"></a>
                </div>

            </div>

        </div>

    </section>

</body>

</html>