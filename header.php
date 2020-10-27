<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    
    </head>
    <body class="container-fluid bg-secondary">
        <header class="container-fluid p-3 my-3 bg-dark text-white">
            <h2 class=""> TIBROS </h2>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-between">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                          <a class="nav-link" href="index.php" target="_PARENT">Inicio</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="status.php" target="_PARENT">Estatus de pedidos</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="pagar.php" target="_PARENT">Pagos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="agregar_producto.php" target="_PARENT">Vende articulos</a>
                </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0" action="search.php" method="POST" target="_PARENT">
                    <input class="form-control mr-sm-2" type="text" placeholder="Buscar" name="busca">
                    <select class="form-control" name="filtro" style="margin-right: 5px" required >
                        <option selected value="0">Buscar por.</option>
                        <option value="1">ISBN</option>
                        <option value="2">Nombre de libro</option>
                        <option value="3">Genero</option>
                        <option value="4">Autor</option>
                        <option value="5">Precio</option>
                        <option value="6">Editorial</option>
                        <option value="7">Idioma</option>
                        <option value="8">Año</option>
                    </select>
                    <Button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</Button>
                  </form>
            </nav>
        </header> 
    </body>
</html>