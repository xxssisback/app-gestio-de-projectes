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
    <section class="feature-area area-padding bg_one">
        <div class="container">
            <div class="row align-items-center">

                <div class="offset-lg-6 col-lg-6">
                <?php require_once('functions/connector.php');?>
                <div class="formulario">
                    <h1 class="titulo_formulario">Nou projecte</h1>
                    <br><br>
                    <form action=functions/gravar_projecte.php method="POST">
                        <label for=nom_projecte>Nom del projecte : </label>
                        <input class="form-textbox form-textbox-text" type="text" id=nom_projecte name=nom_projecte size="20"><br><br>
                        <label for=data_inici>Data inici: </label>
                        <input class="form-textbox form-textbox-text" type="date" id=data_inici name=data_inici><br><br>
                        <label for=data_fi_estimat>Data fi estimada: </label>
                        <input class="form-textbox form-textbox-text" type="date" id=data_fi_estimat name=data_fi_estimat size="40"><br><br>
                        <label for=data_fi_real>Data fi real: </label>
                        <input class="form-textbox form-textbox-text" type="date" id=data_fi_real name=data_fi_real size="40"><br><br>
                        <label for=hores_estimades>Hores estimades: </label>
                        <input class="form-textbox form-textbox-text" type="number" id=hores_estimades name=hores_estimades size="40"><br><br>
                        <div align="center">
                            <input class="button button-block-info as-tradeupinline-button" type="submit" value="Gravar"/>
                            <input class="button-white button-block-info as-tradeupinline-button" type="reset" value="Reiniciar"/><br>
                        </div>
                        </form>
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