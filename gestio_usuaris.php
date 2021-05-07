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
                $sql="SELECT * FROM tb_usuaris INNER JOIN tb_rangs ON tb_usuaris.id_rang = tb_rangs.id_rang;";
                $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink)); ?>

                <!-- Tabla de contingut -->
                <table class="table">
                    <tr>
                        <br>
                        <h1 class="titulo_formulario">Llistat de usuaris</h1>
                        <br>
                        <th>Nom i cognom</th><th>Correu electrònic</th><th>Telèfon de contacte</th><th>Rang</th>
                    </tr>
                    <?php while($usuari=mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $usuari["usuari"]; ?></td>
                        <td><?php echo $usuari["correu"]; ?></td>
                        <td><?php echo $usuari["telefon"]; ?></td>
                        <td><?php echo $usuari["rang"]; ?></td>
                        <td>
                            <a class="enllaç_modificar" href="modificar_usuari.php?usuari=<?php echo $usuari["id_usuari"];?>">Modificar</a>
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
    swal ( "No es pot suprimir" ,  "No tens permisos per eliminar un usuari!" ,  "error" )
    }
    </script>
    <!-- ================ Scripts ================= -->

</body>

</html>