<?php

$mes=(isset($_REQUEST["mes"])?$_REQUEST["mes"]:date("m"));
$any=(isset($_REQUEST["any"])?$_REQUEST["any"]:date("Y"));

$desp= date("N",strtotime("$any-$mes-01")); 
$desp--; ?>

<!-- Selector de Mes -->
<button style="font-size: 25px;" class="button_calendari" onclick="carregar_mes_anterior()"><</button>
<span style="font-size: 25px;"><?php echo date("M Y"." ",strtotime("$any-$mes-01"));?></span>
<button style="font-size: 25px;" class="button_calendari" onclick="carregar_mes_seguent()">></button>
<hr>
<!-- Calendario -->
<table>

<!-- Dias de la semana -->
<tr>
    <th>DL</th>
    <th>DM</th>
    <th>DX</th>
    <th>DJ</th>
    <th>DV</th>
    <th>DS</th>
    <th>DG</th>
</tr>

<?php
    for($setmana=0;$setmana<=5;$setmana++) { ?>
    <tr><?php 
        for($dia=1;$dia<=7;$dia++) {?>
            <td><?php
                $dia_mes=$setmana*7+$dia-$desp;
                
                if(checkdate($mes,$dia_mes,$any)) {
                    if(hi_ha_hores_registrades("$any-$mes-$dia_mes")) {
                    $classe_div="amb_hores";
                }else{
                    $classe_div="sense_hores";
                }
                
                if(finalitzen_tasques("$any-$mes-$dia_mes")) {
                    $classe_div="finalitzen_tasques";
                }
                ?>
                
                <div class="dia <?php echo $classe_div ?>">
                    <a style="font-size: 20px; padding: 15px;" href="#" onclick="carregar_hores('<?php echo $any.'-'.$mes.'-'.$dia_mes; ?>')"><?php echo $dia_mes; ?></a>
                </div> <?php
                } ?>
            </td> <?php
            } ?>
    </tr> <?php 
} ?>
</table>
<?php 

function hi_ha_hores_registrades($data) {
    if(date("N",strtotime($data))==2 || date("N",strtotime($data))==4) {
        return true;
    } else {
        return false;
    }
}

function finalitzen_tasques($data) {
    include('functions/connector.php');
    $sql="SELECT * FROM tb_tasques WHERE data_fi_estimat='$data'";
    $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
    return mysqli_num_rows($result)>0;
}
?>

<!-- Funcions calendari -->
<script>

        var mes = <?php echo $mes ?>;
        var any = <?php echo $any ?>;


// Carregar mes seguent
        function carregar_mes_seguent(){
            mes++;
            if(mes>12){
                mes=1;
                any++;
            }

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if(this.readyState > 2){
                    document.getElementById("calendari").innerHTML=this.responseText;
                }
            };
            xhr.open("POST","calendari.php",true);
            xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            xhr.send("mes="+mes+"&any="+any);
        }

// Carregar mes anterior

        function carregar_mes_anterior(){
            mes--;
            if(mes<1){
                mes=12;
                any--;
            }

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if(this.readyState > 2){
                    document.getElementById("calendari").innerHTML=this.responseText;
                }
            };
            xhr.open("POST","calendari.php",true);
            xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            xhr.send("mes="+mes+"&any="+any);
        }

// Carregar hores

        function carregar_hores(data){
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if(this.readyState > 2){
                    document.getElementById("main").innerHTML=this.responseText;
                }
            };
            xhr.open("POST","taula_hores.php",true);
            xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            xhr.send("data="+data);
        }
    </script>