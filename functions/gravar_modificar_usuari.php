<?php 
require('connector.php');
$sql="UPDATE tb_usuaris SET usuari='".$_POST["usuari"]."',correu='".$_POST["correu"]."',telefon='".$_POST["telefon"]."',id_rang='".$_POST["id_rang"]."' WHERE id_usuari=".$_POST["id_usuari"].";";
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../gestio_usuaris.php");
?>