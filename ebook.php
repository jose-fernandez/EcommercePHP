<?php
include('inc/funciones.php');
include('inc/bd.php');
$titulo="E-Books";
$pagina="ebook";
include('inc/header.php');?>
    
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenido a Tiendanube</h1>
        <p>Tu tienda online de confianza donde conseguir los mejores descuentos en libros electronicos y E-books.</p>
      </div>
    </div>

	<div class="container">

      <div class="row">
      <?php foreach($product as $product_id => $producto){ 
        echo ebooks($product_id, $producto);
      } ?>
      </div>

      <hr>

    </div> <!-- /container -->

    <?php include('inc/footer.php');?>
