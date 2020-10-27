<html>
<head>
	<title>Comprar</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="container-fluid bg-secondary">
	<iframe id="header" src="header.php" height="150px" width="100%" frameBorder="0" scrolling="no" ></iframe>
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <table border="2px" style="margin-top: 15px; margin-left: 15px">
                    <thead>
                        <tr> 
                            <th>ISBN</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                $isbn=$_GET['valor'];
                                require "conexion.php";
                                $con = conexion();
                                $query = "SELECT * FROM Libro WHERE Isbn = '$isbn'";
                            $row = $con->query($query)->fetch_assoc();
                            ?>
                            <td><?php echo $row['Isbn']; ?></td>
                            <td><img height="200px" width="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']);?>"/> </td>
                            <td><?php echo $row['Nombre'];?></td>
                            <td><?php echo $row['Descripcion']; ?></td>
                            <td><?php echo $row['Precio']; ?></td>
                        </tr>
                        
                    </tbody>
                </table>  
            </div>
            <div class="col">
                <form class="bg-secondary" method="POST">
                    <div class="row form-group">
		    	        <label for="Nombre" class="col-sm-2 col-form-label">Nombre</label>
		    	        <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre" required>
		  	        </div>
                    <div class="row form-group">
		    	        <label for="Direccion" class="col-sm-2 col-form-label">Direccion</label>
		    	        <input type="text" class="form-control" name="Direccion" id="Direccion" placeholder="Direccion" required>
		  	        </div>
                    <div class="row form-group">
		    	        <label for="Tarjeta" class="col-sm-2 col-form-label">Tarjeta</label>
		    	        <input type="text" class="form-control" name="Tarjeta" id="Tarjeta" placeholder="XXXX XXXX XXXX XXXX" patern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4} " required>
		  	        </div>
                    <input class="btn btn-dark" type="submit" value="Comprar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>