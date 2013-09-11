<?php
    //header("refresh: 3;");	//refresh pomocí PHP nefunguje v načtené HTML stránce
    $datum = StrFTime("Právě je %H hodin, %M minut a %S sekund", Time());
    echo($datum);
?>