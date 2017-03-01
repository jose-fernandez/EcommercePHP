<?php

include('users.php');
$name= $_POST['name'];
$pass=$_POST['pass'];
$foo=true;

if(isset($users)){
	$cont=0;
	foreach ($users as $user) {
		$cont++;
		if($name==$user['name'] && $pass==$user['password']){
				header("location:../signed.php?id=".$cont);
				$foo=false;
		}

	};
}
if($foo){
	header("location:../fail.php");
}

?>