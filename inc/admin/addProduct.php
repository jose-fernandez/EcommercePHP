<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Añadir Producto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="../../img/logo.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../../perfilAdmin.php">Administración</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="addProduct.php">Añadir Producto</a></li>
      <li><a href="deleteProduct.php">Eliminar Producto</a></li>
      <li><a href="#">Modificar Producto</a></li>
      <li><a href="#">Facturas</a></li>
      <li ><a style="color:white" href="../../index.php" class="btn btn-danger" type="button">Cerrar Sesión</a></li>
    </ul>
  </div>
</nav>
<div class="jumbotron">
  <div class="container">
    <h1>Bienvenido al Panel de Administración</h1>
    <p>Introduce los datos del Producto a añadir</p>
  </div>
</div>
<form style="width: 30%; margin:auto" role="form" method="post" action="../bd.php">
  <div class="form-group">
    <span class="label label-info">Nombre</span><input type="text" placeholder="Nombre" class="form-control" name="name" id="name">
  </div>
  <div class="form-group">
    <span class="label label-info">Descripción</span><input type="text" placeholder="Descripción" class="form-control" name="desc">
  </div>
  <div class="form-group">
    <span class="label label-info">Imagen</span><input type="text" placeholder="Url imagen" class="form-control" name="img">
  </div>
  <div class="form-group">
    <span class="label label-info">Precio</span><input type="float" placeholder="Precio" class="form-control" name="precio">
  </div>
  <div class="form-group">
    <span class="label label-info">Stock</span><input type="number" placeholder="Stock" class="form-control" name="stock">
  </div>
  <div class="form-group">
    <span class="label label-info">0=.epub 1=E-book</span><input type="number" placeholder="Tipo" min="0" max="1"class="form-control" name="type">
  </div>
  <button id="submit" type="submit" class="btn btn-success">Enviar</button>

</form>

<?php include('../footer.php'); ?>
</body>
</html>