<?php 
require_once('connector.php');
$sql="INSERT INTO tb_usuaris VALUES (null,'".$_POST["usuari"]."','".$_POST["correu"]."','".$_POST["telefon"]."','".$_POST["id_rang"]."');";
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../gestio_usuaris.php");
?>