<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cykly</title>
</head>
<body>
    //cyklus je nieco, co sa opakuje 
    //typy: for, foreach - pre pole - array, loop-specialne pre arduino, while, do while 
    //for je typ cyklu, pri kt. pozname pocet opakovani
    //while je typ cyklu, pri kt. nepozname pocet opakovani, opakuje sa pokial je splnena podmienka
    //do while je typ cyklu podobny while, ale kod sa vyplni aspon raz, podmienka sa kontroluje na konci
    //foreach je typ cyklu, kt. prechadza hodnoty poli
    <?php
    //$mena = array();
    $fontsize = 10;
    <p style="font-size : <?php echo $fontsize; ?>px"></p>
    for($i = 0; $i < 10; $i += 2){
        //fontsize +2 nabuduce pisomka
        echo "najlepsia hodina na svete";
        echo "br";

    }
    <?php 
    ?>
    //uloha kazdy z textov bude vo fonte o 2 vacsi zaciname s 10px
    ?>

</body>
</html>