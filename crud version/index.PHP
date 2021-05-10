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
                    <div class="area-heading light">
                        <h4>Benvingut <br><?php echo "" .$_SESSION["usuari"]; ?>!</h4>
                        <p>Gestiona de manera ràpida i intuïtiva les diferents tasques disponibles de forma gràfica gràcies a aquesta aplicació.</p>
                    </div>
                    <div class="row">
                        <div class="col-">
                            <div class="single-feature d-flex">
                                <div class="feature-icon">
                                    <i class="ti-tag"></i>
                                </div>
                                <div class="single-feature-content">
                                    <h5>Versió 1.0</h5>
                                    <p>Aquesta aplicació s'ha desenvolupat de forma ràpida amb les funcions necessàries, és possible que hi hagi algun error pel camí. En aquest cas contacta amb el desenvolupador.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-">
                            <div class="single-feature d-flex">
                                <div class="feature-icon">
                                    <i class="ti-calendar"></i>
                                </div>
                                <div class="single-feature-content">
                                    <h5>Calendari interactiu</h5>
                                    <p>Amb el calendari pots consular les distintes activitats, tasques o projectes en diferents dies o mesos.</p>
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