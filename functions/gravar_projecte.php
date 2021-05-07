<?php 
require_once('connector.php');
$sql="INSERT INTO tb_projectes VALUES (null,'".$_POST["nom_projecte"]."','".$_POST["data_inici"]."','".$_POST["data_fi_estimat"]."','".$_POST["data_fi_real"]."','".$_POST["hores_estimades"]."');";
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../gestio_projectes.php");
?>