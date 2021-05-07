<!--================ Info project =================-->

<?php include_once('layout/info-project.php'); ?>

<!doctype html>
<html lang="en">

<!--================ Head =================-->

<?php include_once('layout/head.php'); ?>

<!-- ================ End Head ================= -->

<body>

    <!--================Header Menu Area =================-->
   
    <?php include_once('layout/nav_bar.php'); ?>

    <!-- ================ End Header Menu Area ================= -->


    <!--================Feature  Area =================-->
    <section class="area-padding bg_one">
        <div class="container">
            <div class="row align-items-center">

                <div class="tabla">
                <?php require_once('functions/connector.php');
                $sql="SELECT * FROM tb_projectes;";
                $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink)); ?>

                <!-- Tabla de contingut -->
                <table class="table">
                    <tr>
                        <br>
                        <h1 class="titulo_formulario">Llistat de projectes</h1>
                        <br>
                        <th>Nom del projecte</th><th>Data inici</th><th>Data fi estimada</th><th>Data fi real</th><th>Hores estimades</th>
                    </tr>
                    <?php while($projectes=mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $projectes["nom_projecte"]; ?></td>
                        <td><?php echo $projectes["data_inici"]; ?></td>           
                        <td><?php echo $projectes["data_fi_estimat"]; ?></td>
                        <td><?php echo $projectes["data_fi_real"]; ?></td>
                        <td><?php echo $projectes["hores_estimades"]; ?></td>
                        <td>
                            <a class="enllaç_modificar" href="modificar_projecte.php?projecte=<?php echo $projectes["id_projecte"];?>">Modificar</a>
                            &nbsp;&nbsp;
                            <a class="enllaç_editar" href="functions/eliminar_projecte.php?projecte=<?php echo $projectes["id_projecte"];?>">Eliminar</a>
                        </td>
                    </tr>
                <?php
                } 
                ?>
                </table>

                </div>
            </div>
        </div>
    </section>
    <!--================Feature Area End =================-->

    <!-- ================ start footer Area ================= -->

    <?php require_once('layout/footer.php'); ?>

    <!-- ================ End footer Area ================= -->

    <!-- ================ Scripts ================= -->

    <?php require_once('layout/scripts.php'); ?>

    <!-- ================ Scripts ================= -->

</body>

</html>