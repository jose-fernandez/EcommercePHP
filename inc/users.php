<?php 
$users=array();
$mysqli = new mysqli("localhost", "root", "toor", "store");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
/* cambiar el conjunto de caracteres a utf8 */
$mysqli->set_charset("utf8");

$columnaUser = $mysqli->query("SELECT * FROM Client");

$totalUser = $columnaUser->num_rows;


for ($i=1; $i <= $totalUser; $i++) { 

    $consulta = "SELECT id_client, name, surname, phone, email, password, privileges FROM Client WHERE id_client=$i";

    if ($resultado = $mysqli->query($consulta)) {

        /* obtener el array de objetos */
        while ($file = $resultado->fetch_row()) {
            $users[$file[0]]= array(
                        "name"=>$file[1],
                        "surname"=>$file[2],
                        "phone"=>$file[3],
                        "email"=>$file[4],
                        "password"=>$file[5],
                        "privileges"=>$file[6]
                        );
        }

        /* liberar el conjunto de resultados */
        $resultado->close();
    }
}
$mysqli->close();
?>
