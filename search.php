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
                <th>Comprar ahora</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require "conexion.php";
                $con = conexion();
                $filtro = $_POST['filtro'];
                $busca = $_POST['busca'];
                switch($filtro){
                    case 0:
                        $query = "SELECT * FROM Libro LIMIT 10";
                    break;
                    case 1:
                        $query = "SELECT * FROM Libro WHERE Isbn = '$busca'";
                    break;
                    case 2:
                        $query = "SELECT * FROM Libro WHERE Nombre = '$busca'";
                    break;
                    case 3:
                        $query = "SELECT * FROM Libro WHERE Genero = '$busca'";
                    break;
                    case 4:
                        $query = "SELECT * FROM Libro WHERE Autor = '$busca'";
                    break;
                    case 5:
                        $query = "SELECT * FROM Libro WHERE Precio = '$busca'";
                    break;
                    case 6:
                        $query = "SELECT * FROM Libro WHERE Editorial = '$busca'";
                    break;
                    case 7:
                        $query = "SELECT * FROM Libro WHERE Idioma = '$busca'";
                    break;
                    case 8:
                        $query = "SELECT * FROM Libro WHERE Anio  = '$busca'";
                    break;
                }
                $result = $con->query($query);
                while($row = $result->fetch_assoc()){

            ?>
                <tr>
                    <td><?php echo $row['Isbn']; ?></td>
                    <td><img height="200px" width="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']);?>"/> </td>
                    <td><?php echo $row['Nombre']; echo $var=$row['Nombre']; ?></td>
                    <td><?php echo $row['Descripcion']; ?></td>
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
</body>
</html>