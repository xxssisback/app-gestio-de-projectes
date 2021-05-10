<?php
require('connector.php');
$sql="DELETE FROM tb_projectes WHERE id_projecte=".$_GET["projecte"];
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../gestio_projectes.php");
?>