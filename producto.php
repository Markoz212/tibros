<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body class="container-fluid bg-secondary">

    <table border="2px">
        <thead>
            <tr> 
                <th>ISBN</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Añadir al carrito</th>
                <th>Comprar ahora</th>
            </tr>
            
        </thead>

        <tbody>
            <?php
                require "conexion.php";
                $con = conexion();
                $query = "SELECT * FROM Libro LIMIT 10";
                $result = $con->query($query);
                while($row = $result->fetch_assoc()){    
            ?>
                <tr>
                    <td><?php echo $row['Nombre']; ?></td>
                    <td><img height="200px" width="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']);?>"/> </td>
                    <td><?php echo $row['Isbn']; ?></td>
                    <td><?php echo $row['Descripcion']; ?></td>
                    <td><?php echo $row['Precio']; ?></td>
                    <td><a target="_PARENT" href="carrito.php"><img img height="50px" width="50px" src="https://img.icons8.com/ios/50/000000/add-shopping-cart.png" alt="Añadir al carrito" /></a></td>
                    <td><a target="_PARENT" href="venta.php"><img img height="50px" width="50px" src="https://img.icons8.com/pastel-glyph/64/000000/pay-by-cash.png" alt="Añadir al carrito" /></a></td>
                </tr>
        <?php
                }
        ?>

        </tbody>
    </table>
    
           
</body>
</html>