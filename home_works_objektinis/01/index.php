<?php

require __DIR__.'/Kibiras1.php';


$kibiras = new Kibiras1();
$kibiras->prideti1Akmeni();
$kibiras->pridetiDaugAkmenu(5);
echo "Kibire yra " . $kibiras->kiekPririnktaAkmenu() . " akmenų.";

?>
