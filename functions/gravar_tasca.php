<?php 
require('connector.php');
$sql="INSERT INTO tb_tasques VALUES (null,'".$_POST["usuari"]."','".$_POST["activitat"]."','".$_POST["fase"]."','".$_POST["projecte"]."','".$_POST["data_inici"]."','".$_POST["data_fi_estimat"]."','".$_POST["data_fi_real"]."','".$_POST["hores_estimades"]."');";
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../gestio_tasques.php");
?>