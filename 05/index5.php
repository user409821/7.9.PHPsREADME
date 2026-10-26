<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polia</title>
</head>
<body>
    //Pole je premenna, kt si dokaze uchovat viacero hodnot 
    //Kazda hodnota v poli je indexovana:
    //Indexovanie je jedinecne priradenie cisla k hodnote
    //Standardne funguje od 0 do nekonecna, resp. po pocet prvkov v poli
    //Pole sa v programovani (roznych jazykoch) oznacuje ako [].
    //Napr $ovocie["pomaranc", "mandarinka", "slivka"]
    //pole $ovocie obsahuje 3 hodnoty, index hodnoty pomaranc je 0
    //v jazyku php sa pole definuje pomocou funkcie array
    <?php
    $znaky = array ['♦', '♠', '♣', '♥'];
    $prvaKarta = 0;
    $druhaKarta = 0;
    
    for ($i = 0; $i < 6; $i++){
        $prvaKarta = random_int(2, 14);
        $druhaKarta = random_int(2, 14);
        $nahodnyznak1 = random_int(0, 3);
        $nahodnyznak2 = random_int(0, 3);
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


        if($nahodnyznak1 == 0 || $nahodnyznak1 == 3 ){
            $farba1 = "red";
        }
        else {
            $farba1 = "black";
        }
        if($nahodnyznak2 == 0 || $nahodnyznak2 == 3 ){
            $farba2 = "red";
        }
        else {
             $farba2 = "black";
        }
        echo "Hráč $i: " . "{$prvaKarta} <span style = 'color: $farba1'>{$znaky[$nahodnyznak1]}</span> <span style = 'color: $farba2'>{$druhaKarta} {$znaky[$nahodnyznak2]}</span>" . "<br>";
    }
    ?>
    //nastavte vysku pisma pre tie karty, kt maju najvacsiu hodnotu
    //PRO: sancu na vyhru 
    
</body>
</html>