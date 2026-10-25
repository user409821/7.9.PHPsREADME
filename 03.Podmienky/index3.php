<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podmienky</title>
</head>
<body>
    /*podmienka je programovacia paradigma, pomocou
    ktorej sa rozhoduje, ktory kod sa vykona, obsahuje logicky vyraz napr. j == 5
    Ak je splnena, vykona sa kod uvedeny pod podmienkou, ak nie, tak sa preskoci alebo
    sa vykona kod v casti else
    Pri porovnavani viacerych vyrazov, pouzivame prikaz else if
    Specialnou podmienkou v modernom programovani je switch */
    //
    <?php 
    if(1<5){
        echo "1 je mensie ako 5";
    }

    $cislo1 = 10;
    $cislo2 = 50;
    if($cislo1 != $cislo2){
        echo "Toto sa vykona";
        echo "<br>";
    }
    if($cislo1 == $cislo2){
        echo "Tento kod sa nevykona";
        echo "<br>";

    }
    else{
        echo "Tento kod sa vykona";
        echo "<br>";
    }

    ?>
    <?php
    //Uloha na precvicenie si podmienok
    //vytvorne podmienku,kt. bude na zaklade poctu bodov vypisovat vase hodnotenie 
    //100-90% 1
    //89-80% 2
    //BONUS pocet bodov bude definovany random_int(min, max)
    $min = 0;
    $max = 100; 
    $body = random_int($min, $max);
    if($body >= 90){
        echo "Vase hodnotenie je 1";
    }
    else if($body >= 76 && $body < 90){
        echo "Vase hodnotenie je 2";
    }
    else if($body >= 60 && $body < 76){
        echo "Vase hodnotenie je 3";

    }
    else if($body >= 46 && $body < 60){
        echo "Vase hodnotenie je 4";
    
    }
    else{
        echo "Vase hodnotenie je 5";
    }
    echo "<br>";
    //uloha 2 vstup na party moze byt ak: 
    //od 18 rokov
    //ak v spisskej novej vsi, tak od 15
    //ak nie slusne oblecenie tak smola
    //ak +kamos, zlava
    //ak suhlas od zak, zastupcu, tak od 10;
    //ak  si bol v base tak nesmies
    $suhlas = random_bool();
    $mestoJeSpisska = random_bool();
    $oblecenieJeSlusne = random_bool() ;
    $vek = random_int(0, 100);
    $basa = random_bool();
    if ($basa == false){
     if($oblecenieJeSlusne == true){
         if($vek == 18){
            echo "vitaj na party";
         }
         else if($mestoJeSpisska == true && $vek >= 15){
            echo "vitaj na party";
         }
         else if($suhlas == true && $vek >= 10){
            echo "vitaj na party";
         }
         else{
            echo "Smola, nemozes ist na party";
         }


     }
     else{
        echo "Smola, oblecenie nie je slusne";
     }
    }
    else{
        echo "Smola, bol si v base";
    } 


    ?>
    //Operator
    // ! je negacia
    // == rovna sa
    // <= mensie rovne
    // >= vacsie rovne 
    // === porovnava hodnotu aj datovy typ



</body>
</html>