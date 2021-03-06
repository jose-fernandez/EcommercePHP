<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $titulo;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" href="img/logo.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/logo.png " style="height: 27px"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li <?php if($pagina=="inicio") {echo "class='active'";};?>><a href="index.php">Inicio</a></li> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorias <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Libros Electronicos Oferta</li>
                        <li <?php if($pagina=="libros") {echo "class='active'";};?>><a href="libros.php">Libros Electronicos</a></li>
                        
                        <li class="divider"></li>
                        <li class="dropdown-header">E-Books Kindle</li>
                        <li <?php if($pagina=="ebook") {echo "class='active'";};?>><a href="ebook.php">E-Books</a></li>
                    </ul>
                </li>
                <li <?php if($pagina=="contacto") {echo "class='active'";};?>><a href="contacto.php">Contacto</a></li>
            </ul>
            <div style="text-align:right;">
	          	<span  class="label label-success">Bienvenido <?php
	          	$id=$_GET['id'];
				$user = $users[$id];
	          	echo $user['name'];
	          	?> </span>
	          	<form action='inc/perfil.php' method="post">
	          	<input type="hidden" name="id" value=<?php echo $id ?>>
		            <button style="float:right;margin-top: 5px;" id="submit" type="submit" class="btn btn-success">Perfil</button>
	            </form>
	            <button style="float:right;margin-left:15px;margin-top: 5px;" id="exit" class="btn btn-danger">Cerrar Sesión</button>
            </div>
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
<script type="text/javascript">
	$('#exit').click(function(){
	window.location.replace("index.php");
});
</script>