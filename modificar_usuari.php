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
                <?php require_once('functions/connector.php');
                $sql="SELECT * FROM tb_usuaris WHERE id_usuari=".$_REQUEST["usuari"];
                $result=mysqli_query($dbLink,$sql) or exit(mysqli_connect_error($dbLink));
                $usuari=mysqli_fetch_array($result);
                ?>
                <div class="formulario">
                    <h1 class="titulo_formulario">Modificar usuari</h1>
                    <br><br>
                    <form action=functions/gravar_modificar_usuari.php method="POST">
                        <label for=usuari>Nom i cognom: </label>
                        <input type="hidden" id=id_usuari name=id_usuari value="<?php echo $usuari["id_usuari"];?>" size="20">
                        <input class="form-textbox form-textbox-text" type="text" id=usuari name=usuari value="<?php echo $usuari["usuari"];?>" size="20"><br><br>
                        <label for=correu>Correu electrònic: </label>
                        <input class="form-textbox form-textbox-text" type="email" id=correu name=correu value="<?php echo $usuari["correu"];?>" size="20"><br><br>
                        <label for=telefon>Telèfon de contacte: </label>
                        <input class="form-textbox form-textbox-text" type="tel" id=telefon name=telefon value="<?php echo $usuari["telefon"];?>" size="20"><br><br>
                        <label for=rang>Rang: </label>
                        <select class="form-textbox form-textbox-text" id=id_rang name=id_rang>
                            <option value=0></option>
                            <?php 
                                $sql="SELECT * FROM tb_rangs ORDER BY id_rang;";
                                $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
                                while($rang=mysqli_fetch_array($result)) {?>
                                    <option <?php if($rang["id_rang"]==$rang["id_rang"]) echo "selected";?> value="<?php echo $rang["id_rang"]; ?>">
                                    <?php echo $rang["rang"]; ?>
                                    </option> <?php
                                }
                                ?>
                        </select><br><br>
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