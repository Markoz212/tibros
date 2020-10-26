<?php
    if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
        require "conexion.php";
        $isbn= $_POST['isbn'];
        $nombre= $_POST['libro'];
        $descripcion= $_POST['desc'];
        $autor= $_POST['autor'];
        $genero= $_POST['genero'];
        $precio= $_POST['precio'];
        $editorial= $_POST['editorial'];
        $idioma= $_POST['idioma'];
        $anio= $_POST['anio'];
        $imagen = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $con = conexion();
        $query = "INSERT INTO Libro (Isbn, Nombre, Descripcion, Autor, Genero, Precio, Editorial, Idioma, Anio,Imagen) VALUES ('$isbn','$nombre','$descripcion','$autor','$genero','$precio', '$editorial','$idioma','$anio','$imagen')";
        //$result = $con->query($query);
        if(mysqli_query($con, $query)){
            echo '<script>confirm("El libro '.$nombre.' se ha registrado con exito!")</script>';
        }else{
            echo '<script>confirm("Ha ocurrido un error con el libro '.$nombre.' intente nuevamente!")</script>';
        }
    }
?>
<html>
    <head>
        <title>Nuevo producto</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="estilo.css">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body class="container-fluid bg-secondary">
        <iframe id="header" src="header.php" height="20%" width="100%" frameBorder="0" scrolling="no" ></iframe>

        <div class="container ">
        <form class="bg-secondary" name="agregar_producto" id="agregar_producto" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
		    	<label for="isbn" class="col-sm-2 col-form-label">ISBN</label>
		    	<input type="text" class="form-control" name="isbn" id="isbn" placeholder="ISBN" required>
		  	</div>
		  	<div class="form-group row">
		    	<label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
		    	<input type="text" class="form-control" name="libro" id="libro" placeholder="Nombre del libro" required>
		  	</div>
		  	<div class="form-group row">
		    	<label for="desc" class="col-sm-2 col-form-label">Descripcion</label>
		    	<input type="text" class="form-control" name="desc" id="desc" placeholder="Reseña" required>
		  	</div>
		  	<div class="form-group row">
		    	<label for="autor" class="col-sm-2 col-form-label">Autor</label>
		    	<input type="text" class="form-control" name="autor" id="autor" placeholder="Autor" required>
		  	</div>
		  	<div class="form-group row">
		    	<label for="genero" class="col-sm-2 col-form-label">Genero</label>
		    	<input type="text" class="form-control" name="genero" id="genero" placeholder="Genero" required>
            </div>
            <div class="form-group row">
		    	<label for="precio" class="col-sm-2 col-form-label">Precio</label>
		    	<input type="number" class="form-control" name="precio" id="precio" placeholder="Precio" required>
            </div>
            <div class="form-group row">
		    	<label for="editorial" class="col-sm-2 col-form-label">Editorial</label>
		    	<input type="text" class="form-control" name="editorial" id="editorial" placeholder="Editorial" required>
            </div>
            <div class="form-group row">
		    	<label for="idioma" class="col-sm-2 col-form-label">Idioma</label>
		    	<input type="text" class="form-control" name="idioma" id="idioma" placeholder="Idioma" required>
		  	</div>
            <div class="form-group row">
		    	<label for="anio" class="col-sm-2 col-form-label">Año</label>
		    	<input type="text" class="form-control" name="anio" id="anio" placeholder="Año" required>
            </div>            
              <!-- CARGA DE IMAGEN a la base de datos-->
            <div class="form-group row">
                <label for="imagen" class="col-sm-2 control-label">Imagen</label>
                <input type="file" class="form-control" id="image" name="image" multiple required>
            </div>
                <input type="submit" name="submit" class="btn btn-dark" value="Enviar">
              
        </form>
    </div>
        </body>
</html>