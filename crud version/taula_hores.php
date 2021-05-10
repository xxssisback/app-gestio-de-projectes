<div class="tabla">
    <?php
        $data=$_REQUEST["data"];
        include("functions/connector.php");
        $sql = "SELECT * FROM tb_registre_hores 
        INNER JOIN tb_projectes ON tb_registre_hores.id_projecte =tb_projectes.id_projecte 
        INNER JOIN tb_tasques ON tb_registre_hores.id_tasca =tb_tasques.id_tasca
        INNER JOIN tb_usuaris ON tb_registre_hores.id_usuari =tb_usuaris.id_usuari
        INNER JOIN tb_activitats ON tb_registre_hores.id_activitat =tb_activitats.id_activitat";
        $result = mysqli_query($dbLink, $sql) or exit(mysqli_error($dbLink)); ?>

        <!-- Tabla de contingut -->
            <table class="table">
                <tr>
                    <br>
                    <h1 class="titulo_formulario">Hores registrades: <?php echo $data?></h1>
                        <br>
                        <th>Nº</th><th>Tasca</th><th>Projecte</th><th>Usuari</th><th>Activitat</th><th>Data</th><th>Hores</th><th>Descripció</th>
                    </tr>
                    <?php while($taula_hores=mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $taula_hores["id_registre_hores"]; ?></td>
                        <td><?php echo $taula_hores["tasca"]; ?></td>
                        <td><?php echo $taula_hores["nom_projecte"]; ?></td>
                        <td><?php echo $taula_hores["usuari"]; ?></td>
                        <td><?php echo $taula_hores["data"]; ?></td>
                        <td><?php echo $taula_hores["activitat"]; ?></td>
                        <td><?php echo $taula_hores["hores"]; ?></td>
                        <td><?php echo $taula_hores["descripcio"]; ?></td>
                    </tr>
                <?php
                } 
                ?>
        </table>
</div>