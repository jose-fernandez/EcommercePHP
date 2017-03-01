<?php 
  include('../bd.php');
  include('../funciones.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eliminar Producto</title>
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
      <li ><a href="addProduct.php">Añadir Producto</a></li>
      <li class="active"><a href="deleteProduct.php">Eliminar Producto</a></li>
      <li><a href="#">Modificar Producto</a></li>
      <li><a href="#">Facturas</a></li>
      <li ><a style="color:white" href="../../index.php" class="btn btn-danger" type="button">Cerrar Sesión</a></li>
    </ul>
  </div>
</nav>
<div class="jumbotron">
  <div class="container">
    <h1>Bienvenido al Panel de Administración</h1>
    <p>Seleccione los productos a eliminar</p>
  </div>
</div>
<div class="container">

    <div class="row">
    <?php foreach($product as $product_id => $producto){ 
      echo delete($product_id, $producto);
    } ?>
    </div>

    <hr>

</div> <!-- /container -->

<?php include('../footer.php'); ?>
</body>
</html>