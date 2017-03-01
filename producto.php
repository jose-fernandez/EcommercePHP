<?php
include('inc/bd.php');

$book_id= $_GET["id"];
$productos = $product[$book_id];

$titulo="Producto";
$pagina="producto";
include('inc/header.php');
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1><?php echo $productos["name"] ?></h1>
        <a target="_blank" href="<?php echo $productos["imagen"] ?>"><img style="width: 50%; float: left;" src="<?php echo $productos["imagen"] ?>"></a>
        <div style="float: right; width: 40%">
          <h2><?php echo $productos["name"] ?></h2>
          <p><?php echo $productos["descripcion"] ?></p>
          <hr>
          <p>Quedan <?php echo $productos['stock'] ?> unidades</p>
          <hr>
          <h1><?php echo $productos['precio'] ?> €</h1>
        </div>
      </div>
    </div>

      <!-- Example row of columns -->

<?php include('inc/footer.php');?>

<script type="text/javascript">
var list=[];
  $('.comprar').click(function(){
    list.push({"name":$('.container>h1').text(),
              "imagen":$('.container>a>img').attr("src"),
              "descripcion":$('.container>div>p').text(),
              "precio":$('.container>div>h1').text()});
    console.log(list);
  });
</script>