
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
    ini_set('display_errors', 1);
    //$mena = array();
    $fontsize = 10;
    ?>
    <p style="font-size : <?php echo $fontsize; ?>px"></p>
    <?php
    for($i = 0; $i < 10; $i += 2){
        //fontsize +2 nabuduce pisomka
        echo "najlepsia hodina na svete";
        echo "<br>";

    }   
    ?>
    <p style="font-size : 10px"></p>
    <?php
    //$mena = array();
    $fontsize = 10;
    
    $k = 1;
    while($k<10){
        for($i = 0; $i < 10; $i++){
            $red = random_int(0, 255);
            $green = random_int(0, 255);
            $blue = random_int(0, 255);
            //fontsize +2 nabuduce pisomka
            //slovo hodina ma v kazdom cykle nahodnu farbu
            echo "<p style='font-size: {$fontsize}px'>najlepsia <span style='color: RGB($red, $green, $blue)'>hodina</span> na svete</p>";
            echo "<br>";
            $fontsize += 5;
            $k++;

        }

    }
    ?>
    <?php
    //cyklus od 0 do 6, v kazdom cykle vytvorte kombinaciu kariet
    //kazdy dostane 2 karty
    //hodnoty 2-10, j(11), q(12), k(13), a(14) 
    //znaky 4 srdce ♥ ♣ ♠ ♦ 
    $i = 0;
    do{ 
    
        echo "Hráč $i: " . "<br>";
        for ($j = 1; $j <= 2; $j++){
        $hodnota = random_int(2, 14);
        if ($hodnota == 11){
            $hodnota = 'J';
        } else if ($hodnota == 12){
            $hodnota = 'Q';
        } else if ($hodnota == 13){
            $hodnota = 'K';
        } else if ($hodnota == 14){
            $hodnota = 'A';
        }
        $znak = random_int(1, 4);
        if ($znak == 1){
            $znak = "♥";
            $farba = "cervena";
        } else if ($znak == 2){
            $znak = "♣";
            $farba = "cierna";
        } else if ($znak == 3){
            $znak = "♠";
            $farba = "cierna";
        } else if ($znak == 4){
            $znak = "♦";
            $farba = "cervena";
        }
        //"toto je string," 'toto je pismeno'
        echo $j . ". karta: " . $farba . " " . $znak . " " . $hodnota ;
        echo "<br>";
        }
        $i++;

        

    
    } while($i < 6);


    //horsia verzia :P
    $prvaKarta = 0;
    $druhaKarta = 0;
    for ($i = 0; $i < 6; $i++){
        $prvaKarta = random_int(2, 14);
        $druhaKarta = random_int(2, 14);
        if ($prvaKarta == 11){
            $prvaKarta = 'J';
        } else if ($prvaKarta == 12){
            $prvaKarta = 'Q';
        } else if ($prvaKarta == 13){
            $prvaKarta = 'K';
        } else if ($prvaKarta == 14){
            $prvaKarta = 'A';
        }
        if ($druhaKarta == 11){
            $druhaKarta = 'J';
        } else if ($druhaKarta == 12){
            $druhaKarta = 'Q';
        } else if ($druhaKarta == 13){
            $druhaKarta = 'K';
        } else if ($druhaKarta == 14){
            $druhaKarta = 'A';
        }
        echo "Hráč $i: " . "{$prvaKarta} {$druhaKarta}" . "<br>";
    }
    //pokracovanie v 05 - index5.php
    //uloha kazdy z textov bude vo fonte o 2 vacsi zaciname s 10px
    ?>

</body>
</html>