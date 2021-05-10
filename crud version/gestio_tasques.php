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
                $sql="SELECT * FROM tb_tasques 
                INNER JOIN tb_usuaris USING (id_usuari)
                INNER JOIN tb_activitats USING (id_activitat)
                INNER JOIN tb_fases USING (id_fase)
                INNER JOIN tb_projectes USING (id_projecte) ;";

                $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink)); ?>

                <!-- Tabla de contingut -->
                <table class="table">
                    <tr>
                        <br>
                        <h1 class="titulo_formulario">Llistat de tasques</h1>
                        <br>
                        <th>Usuari</th><th>Activitat</th><th>Fase</th><th>Projecte</th><th>Data inici</th><th>Data fi estimada</th><th>Data fi real</th><th>Hores estimades</th>
                    </tr>
                    <?php while($tasca=mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $tasca["usuari"]; ?></td>
                        <td><?php echo $tasca["activitat"]; ?></td>           
                        <td><?php echo $tasca["fase"]; ?></td>
                        <td><?php echo $tasca["nom_projecte"]; ?></td>
                        <td><?php echo $tasca["data_inici"]; ?></td>
                        <td><?php echo $tasca["data_fi_estimat"]; ?></td>
                        <td><?php echo $tasca["data_fi_real"]; ?></td>
                        <td><?php echo $tasca["hores_estimades"]; ?></td>
                        <td>
                            <a class="enllaç_modificar" href="modificar_tasca.php?tasca=<?php echo $tasca["id_tasca"];?>">Modificar</a>
                            &nbsp;&nbsp;
                            <button class="button_none" onclick=eliminar()><span class="enllaç_eliminar">Eliminar<span></button>
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

    <script>
    function eliminar() {
    swal ( "No es pot suprimir" ,  "No s'ha pogut suprimir la tasca perquè hi ha hores registrades en ella." ,  "error" )
    }
    </script>
    <!-- ================ Scripts ================= -->

</body>

</html>