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

                <div class="offset-lg-0 col-lg-5">
                <?php require_once('functions/connector.php');?>
                <div class="formulario">
                    <h1 class="titulo_formulario">Calendari</h1>
                    <br><br>
                    <div class="calendari" id="calendari">
                    <?php include("calendari.php"); ?>
                    </div>
                </div>
                <br>

                <div class="row align-items-center">
                <div class="offset-lg-0 col-lg-10">
                <!-- Resultados -->
                    <div class="formulario">
                    <h1 class="titulo_formulario">Hores registrades</h1>
                    <br><br>
                    <div class="calendari" id="calendari">
                    <?php include("taula_hores.php"); ?>
                    </div>
                    </div>
                </div>
                    </div>
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