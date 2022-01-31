<html>

<head>
    <title>Catálogo libros</title>
</head>

<body>
    <h1>Libros dados de alta en nuestra libreria</h1>


    <nav>
        <ul>
            <li><a href="index.php">Página principal</a></li>
            <li><a href="index.php?controller=series&action=Formulario">Nuevo elemento</a></li>
            <li><a class="active" href="index.php?controller=listarSeries&action=listar">Lista elementos</a></li>
            <!-- <li><a href="import.php">Importar elementos</a></li>
                <li><a href="exportar.php">Exportar elementos</a></li> -->

        </ul>
    </nav>

    <br>
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

        <?php foreach ($series as $serie) :
            $id = $serie["id"];

        ?>
            <tr>
                <td><?php echo $serie['titulo'] ?></td>
                <td><?php echo $serie['autor'] ?></td>
                <td><?php echo number_format($serie['episodios'], 2) ?></td>
                <td><?php echo $serie['estreno'] ?></td>
                <?php
                echo "<td><a href=\"index.php?controller=series&action=listarSerie&id=$id\">Detalles</td>";
                echo "<td><a href=\"index.php?controller=series&action=Formulario&id=$id\">Editar</td>";
                echo "<td><a href=\"index.php?controller=series&action=borrar&id=$id\">Eliminar</td>";
                ?>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>