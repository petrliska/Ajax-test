<?php

$t = Time();
$s = $t % 60;
$m = ($t / 60) % 60;
$h = ($t / 3600) % 24;

echo "Právě je ".$h." hodin, ".$m." minut a ".$s." sekund!";

?>