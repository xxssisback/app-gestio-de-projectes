<?php 
require('connector.php');
$sql="UPDATE tb_projectes SET nom_projecte='".$_POST["nom_projecte"]."',data_inici='".$_POST["data_inici"]."',data_fi_estimat='".$_POST["data_fi_estimat"]."',data_fi_real='".$_POST["data_fi_real"]."',hores_estimades='".$_POST["hores_estimades"]."' WHERE id_projecte=".$_POST["id_projecte"].";";
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../gestio_projectes.php");
?>