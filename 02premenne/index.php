<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premenne</title>
</head>
<body>
    <?php
    echo "<h1>tento web je zamerany na premenne</h1>";
    $cislo = 5;
    echo $cislo;
    echo "<br>";
    //vypisanie hodnoty premennej
    $cislo1 = 2;
    $cislo2 = 4;
    $vysledok = (int)$cislo1 + (int)$cislo2;
    echo $vysledok;
    echo "<br>";
    $textACislo = "toto je moje cislo" . $cislo1;
    echo $textACislo;
    echo "<br>";
    $spravodlivost = true;
    echo $spravodlivost;
    ?>
</body>
</html>