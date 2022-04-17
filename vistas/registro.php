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

    <section id="registro" class="col-sm-10 col-md-10 mx-auto">

        <h1 id="titulo" class="text-center my-4">Registro</h1>

        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label text-white">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="email@dominio.com" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pwd" class="col-sm-2 col-form-label text-white">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd">
            </div>
        </div>

        <div class="mb-3 row">
            <button type="submit" class="btn btn-outline-success">Confirmar Registro</button>
        </div>

    </section>

</body>

</html>