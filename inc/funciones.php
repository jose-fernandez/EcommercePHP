<?php 

function ebooks($book_id, $book){
	if($book['type']==0){
		$salida = "";
		$salida = $salida.'<div class="col-md-3" style="margin-bottom:30px">';
		$salida = $salida.'<h5 style="height:30px;">'.$book["name"].'</h5> <strong>'.$book["precio"].' €</strong>';
		$salida = $salida.'<a href="'.$book["imagen"].'" target="_blank"><img class="img-rounded" style="width:90%;height:350px; margin-bottom:5px;" src="'.$book["imagen"].'"></a>';
	    $salida = $salida.'<p><a class="btn btn-danger"  style="margin-right:15px;" href="producto.php?id=' .$book_id.'" role="button">Ver detalles &raquo;</a><small>'.$book["stock"].' en stock.</small></p>
	        			  </div>';   
	
	    return $salida;}
}

function lElec($book_id, $book){
	if($book['type']==1){
		$salida = "";
		$salida = $salida.'<div class="col-md-4" style="margin-bottom:30px">';
		$salida = $salida.'<h3 style="height:30px;">'.$book["name"].'</h3> <strong>'.$book["precio"].' €</strong>';
		$salida = $salida.'<a href="'.$book["imagen"].'" target="_blank"><img class="img-rounded" style="width:90%;height:350px; margin-bottom:5px;" src="'.$book["imagen"].'"></a>';
	    $salida = $salida.'<p><a class="btn btn-danger"  style="margin-right:15px;" href="producto.php?id=' .$book_id.'" role="button">Ver detalles &raquo;</a><small>'.$book["stock"].' en stock.</small></p>
	        			  </div>';  
	
	    return $salida;}
}

function delete($book_id, $book){
	$salida = "";
	$salida = $salida.'<div class="col-md-3" style="margin-bottom:30px">';
	$salida = $salida.'<h4 style="height:30px;">'.$book["name"].'</h4> <strong>'.$book["precio"].' €</strong>';
	$salida = $salida.'<a href="'.$book["imagen"].'" target="_blank"><img class="img-rounded" style="width:90%;height:350px; margin-bottom:5px;" src="'.$book["imagen"].'"></a>';
    $salida = $salida.'<p><a class="btn btn-danger"  style="margin-right:15px;" href="../deleteItem.php?id=' .$book_id.'" role="button">Eliminar &raquo;</a></p>
        			  </div>';  

    return $salida;
}

?>
