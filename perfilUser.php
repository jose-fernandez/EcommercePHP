<?php 
	include('inc/users.php');
	$id=$_GET['id'];
	$user=$users[$id];

?>

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
      <a class="navbar-brand" href=<?php echo "perfilUser.php?id=".$id?>> Tiendanube  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href=<?php echo "inc/user/buy.php?id=".$id ?>>Comprar</a></li>
      <li><a href="#">Facturas</a></li>
      <li ><a style="color:white" href="index.php" class="btn btn-danger" type="button">Cerrar Sesión</a></li>
    </ul>
  </div>
</nav>
<div class="jumbotron">
  <div class="container">
    <h1>Bienvenido al Perfil de Usuario </h1>
    <p>Tu tienda online de confianza donde conseguir los mejores descuentos en libros electronicos e E-books.</p>
  </div>
</div>


</body>
</html>