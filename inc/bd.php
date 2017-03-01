<?php 
$product=array();
$mysqli = new mysqli("localhost", "root", "toor", "store");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
/* cambiar el conjunto de caracteres a utf8 */
$mysqli->set_charset("utf8");


if(isset($_POST['type'])){
    $insert="INSERT INTO Product (name, description, image, price, stock, type) VALUES ('".$_POST['name']."', '".$_POST['desc']."', '".$_POST['img']."', '".$_POST['precio']."', '".$_POST['stock']."', '".$_POST['type']."')";

    if ($resultado=$mysqli->query($insert)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . $mysqli->error;
}

}else{

    $columna = $mysqli->query("SELECT * FROM Product");

    $total = $columna->num_rows;


    for ($i=1; $i <= $total; $i++) { 

        $consulta = "SELECT id_product, name, description, image, price, stock, type FROM Product WHERE id_product=$i";

        if ($resultado = $mysqli->query($consulta)) {

            /* obtener el array de objetos */
            while ($file = $resultado->fetch_row()) {
                $product[$file[0]]= array(
                            "name"=>$file[1],
                            "descripcion"=>$file[2],
                            "imagen"=>$file[3],
                            "precio"=>$file[4],
                            "stock"=>$file[5],
                            "type"=>$file[6]
                            );
            }

            /* liberar el conjunto de resultados */
            $resultado->close();
        }
    }
}
$mysqli->close();
?>

