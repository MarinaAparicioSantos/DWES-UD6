<html>

<head>
    <title>Catálogo libros</title>
</head>

<body>
    <h1>Libros dados de alta en nuestra libreria</h1>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Episodios</th>
            <th>Estreno</th>
            <th>Detalle</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>

        <?php foreach ($series as $serie) : ?>


            <tr>
                <td><?php echo $serie['titulo'] ?></td>
                <td><?php echo $serie['autor'] ?></td>
                <td><?php echo number_format($serie['episodios'],2) ?></td>
                <td><?php echo $serie['estreno'] ?></td>
                <td><a href="view.php?id=$id">Detalles</td>
                <td><a href="edit.php?id=$id">Editar</td>
                <td><a href="delete.php?id=$id">Borrar</td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>