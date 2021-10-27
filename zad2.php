<?php
    $prva=htmlspecialchars($_GET["prvi_kolokvij"]);
    $druga=htmlspecialchars($_GET["drugi_kolokvij"]);
    $rezultat=($prva + $druga)/2;
    $zaokruzeni=round($rezultat);
    if($prva == 1 || $druga == 1){
        $rezultat=1;
        $zaokruzeni=1;
    }
    echo "<p>Ocjena prvog kololkvija je $prva, a drugog $druga</p>";
    echo "<p>Prosjek ocjena iz kolokvija je $rezultat</p>";    
    echo "Ukupna ocjena je: $zaokruzeni";