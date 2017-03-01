<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administración</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="perfilAdmin.php">Administración</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="inc/admin/addProduct.php">Añadir Producto</a></li>
      <li><a href="inc/admin/deleteProduct.php">Eliminar Producto</a></li>
      <li><a href="#">Modificar Producto</a></li>
      <li><a href="#">Facturas</a></li>
      <li ><a style="color:white" href="index.php" class="btn btn-danger" type="button">Cerrar Sesión</a></li>
    </ul>
  </div>
</nav>
<div class="jumbotron">
  <div class="container">
    <h1>Bienvenido al Panel de Administración</h1>
    <p>Tu tienda online de confianza donde conseguir los mejores descuentos en libros electronicos e E-books.</p>
  </div>
</div>


</body>
</html>