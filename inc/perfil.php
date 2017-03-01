<?php 
include('users.php');
$user = $users[$_POST['id']];
if($user['privileges']==1)
	header("location:../perfilAdmin.php?id=".$_POST['id']);
else
	header("location:../perfilUser.php?id=".$_POST['id']);
?>

