<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body class="container-fluid bg-secondary">
<iframe id="header" src="header.php" height="150px" width="100%" frameBorder="0" scrolling="no" ></iframe>
    <center>
    <h3>Lista de envios pendientes</h3>
    <br>
    <table border="2px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Destino</th>
                <th>Paqueteria</th>
                <th>Libro</th>
                <th>Estatus</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require "conexion.php";
                $con = conexion();
                $query = "SELECT * FROM estado";
                $result = $con->query($query);
                while($row = $result->fetch_assoc()){

            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['direccion']; ?></td>
                    <td><?php echo $row['envio']; ?></td>
                    <td><?php echo $row['libro']; ?></td>
                    <td><?php echo $row['proceso']; ?></td>
                </tr>
        <?php
                }
        ?>
        </tbody>
    </table>
    </center>
</body>
</html>