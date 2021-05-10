<?php 
require('connector.php');
$sql="UPDATE tb_tasques SET usuari='".$_POST["usuari"]."',activitat='".$_POST["activitat"]."',fase='".$_POST["fase"]."',projecte='".$_POST["projecte"]."',data_inici='".$_POST["data_inici"]."', data_fi_estimat='".$_POST["data_fi_estimat"]."',data_fi_real='".$_POST["data_fi_real"]."',hores_estimades='".$_POST["hores_estimades"]."' WHERE id_tasca=".$_POST["id_tasca"].";";
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../gestio_tasques.php");
?>