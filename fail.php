<?php include('inc/funciones.php');?>
<?php 
$titulo="Inicio";
$pagina="inicio";
include('inc/fail.php');
include('inc/bd.php');?>
<link rel="stylesheet" href="/lib/w3.css">
<style>
.mySlides {
  display:none;
  border-radius: 15px;
  margin-bottom: 30px;
}
.w3-content{
  margin: auto;
}
</style>
    
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenido a Tiendanube</h1>
        <p>Tu tienda online de confianza donde conseguir los mejores descuentos en libros electronicos y E-books.</p>
      </div>
    </div>

<div class="w3-content w3-section" style="width:900px">
  <img class="mySlides" src="img/0.jpg" style="width:100%">
  <img class="mySlides" src="img/1.jpg" style="width:100%">
  <img class="mySlides" src="img/1.jpg" style="width:100%">
  <img class="mySlides" src="img/3.jpg" style="width:100%">
</div>

    

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}; 
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<?php include('inc/footer.php');?>
