<html>
    <head>
        <title>Catálogo periodicos</title>
    </head>
    <body>
        <h1>Periodicos dados de alta en nuestra libreria</h1>
        <table border="1">
        <tr>
            <th>NOMBRE</th>
            <th>FECHA</th>
        </tr>

        <?php foreach ($periodicos as $per): ?>
        
        
            <tr>
                <td><?php echo $per['nombre']?></td>
                <td><?php echo $per['fecha']?></td>
            </tr>
        <?php endforeach;?>
       
    </table>
    </body>
</html>
