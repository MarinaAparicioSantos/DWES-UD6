<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Formulario crear/editar</title>
</head>

<body>

    <form class="form-register" enctype="multipart/form-data" action="/controllers/series_controller.php" method="POST">
        <h2 class="form-titulo">Nuevo anime:</h2>
        <div class="contenedor-inputs">
            <input type="text" name="titulo" placeholder="titulo" class="input-100" required>
            <input type="text" name="autor" placeholder="autor" class="input-100" required>
            <input type="text" name="estudio" placeholder="estudio" class="input-100" required>
            <input type="number" name="episodios" placeholder="episodios" class="input-48" required>
            <input type="number" name="puntuacion" placeholder="puntuacion" class="input-48" required>
            <input type="date" name="estreno" placeholder="estreno" class="input-100" required>
            <img src="">
            <input type="file" name="portada" accept="image/png, image/jpeg" class="input-100">
            <input type="submit" value="Registrar" class="btn-enviar">
            <div id="errores"></div>
        </div>
    </form>
</body>

</html>