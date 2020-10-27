<?php
    $nombre= $_POST['Nombre'];
    $direccion= $_POST['Direccion'];
    $tarjeta= $_POST['Tarjeta'];
    $envio= $_POST['Envio'];
    $libro=$_POST['Nombre_libro'];
    require "conexion.php";
    $con= conexion();
    $query = "INSERT INTO estado (nombre, direccion, envio, libro) VALUES ('$nombre', '$direccion', '$envio', '$libro' )";
    $result = $con->query($query);

?>
<html >
<head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
    <body class="container-fluid bg-secondary">
    <iframe id="header" src="header.php" height="150px" width="100%" frameBorder="0" scrolling="no" ></iframe>
    <center>
    <h2 >
    <?php
        echo "El libro $libro sera enviado a $direccion por la paqueteria $envio a nombre de $nombre"
    ?>
    </h2>
    <img src="https://lh3.googleusercontent.com/proxy/N_x4r_bloS1YAFHF_msJA4UczSXZmch5B3p7gfZJ_vhrygCsdqhTe4BfTN_Y5B8mR1e9FAH0BEl7VTK3ZS8OyOqEldpt75RLBw_1L3IvR2KyMQ">
    </center>
    <br>
    <br>
    <center>
    <h1>Sugerencias basadas en tu compra</h1>
    <table border="2px">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Comprar ahora</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $con = conexion();
                    $query = "SELECT * FROM Libro WHERE Genero='suspenso'";
                    $result = $con->query($query);
                    while($row = $result->fetch_assoc()){

                ?>
                    <tr>
                    <div>
                        <td><?php echo $row['Nombre']; $var=$row['Nombre']; ?></td>
                        <td><img height="200px" width="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']);?>"/> </td>
                        <td><?php echo $row['Precio']; ?></td>
                        <div>
                        <td><a target="_PARENT" href="venta.php?valor=<?php echo $row['Isbn']; ?>"><img img height="50px" width="50px" src="https://img.icons8.com/pastel-glyph/64/000000/pay-by-cash.png" alt="Añadir al carrito" /></a></td>
                        </div>
                    </tr>
            <?php
                    }
            ?>
            </tbody>
        </table>
        </center>
    </body>
    </html>