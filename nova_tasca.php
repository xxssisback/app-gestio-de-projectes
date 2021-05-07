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
                    <h1 class="titulo_formulario">Nova tasca</h1>
                    <br><br>
                    <form action=functions/gravar_tasca.php method="POST">
                        <label for=usuari>Usuari: </label>
                        <select class="form-textbox form-textbox-text" id=usuari name=usuari>
                            <option value=0></option>
                            <?php
                                $sql="SELECT * FROM tb_usuaris ORDER BY id_usuari;";
                                $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
                                while($usuari=mysqli_fetch_array($result)) {?>
                                    <option value="<?php echo $usuari["id_usuari"]; ?>">
                                    <?php echo $usuari["usuari"]; ?>
                                    </option> <?php
                                }
                                ?>
                        </select><br><br>
                        <label for=activitat>Activitat: </label>
                        <select class="form-textbox form-textbox-text" id=activitat name=activitat>
                            <option value=0></option>
                            <?php
                                $sql="SELECT * FROM tb_activitats ORDER BY id_activitat;";
                                $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
                                while($activitat=mysqli_fetch_array($result)) {?>
                                    <option value="<?php echo $activitat["id_activitat"]; ?>">
                                    <?php echo $activitat["activitat"]; ?>
                                    </option> <?php
                                }
                                ?>
                        </select><br><br>
                        <label for=fase>Fase: </label>
                        <select class="form-textbox form-textbox-text" id=fase name=fase>
                            <option value=0></option>
                            <?php
                                $sql="SELECT * FROM tb_fases ORDER BY fase;";
                                $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
                                while($fase=mysqli_fetch_array($result)) {?>
                                    <option value="<?php echo $fase["id_fase"]; ?>">
                                    <?php echo $fase["fase"]; ?>
                                    </option> <?php
                                }
                                ?>
                        </select>
                        <br><br>
                        <label for=projecte>Projecte: </label>
                        <select class="form-textbox form-textbox-text" id=projecte name=projecte>
                            <option value=0></option>
                            <?php
                                $sql="SELECT * FROM tb_projectes ORDER BY nom_projecte;";
                                $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
                                while($projecte=mysqli_fetch_array($result)) {?>
                                    <option value="<?php echo $projecte["id_projecte"]; ?>">
                                    <?php echo $projecte["nom_projecte"]; ?>
                                    </option> <?php
                                }
                                ?>
                        </select><br><br>
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