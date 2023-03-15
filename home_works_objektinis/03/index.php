<?php
require __DIR__.'/Kibiras2.php';

  $kibiras1 = new Kibiras2();
  $kibiras1->pridetiAkmeni(rand(0, 9));
  $kibiras1->pridetiAkmeni();
  
  $kibiras2 = new Kibiras2();
  $kibiras2->pridetiAkmeni();
  $kibiras2->pridetiAkmeni();
  $kibiras2->pridetiAkmeni();
  
  $kibiras3 = new Kibiras2();
  $kibiras3->pridetiAkmeni();
  
  echo "Kibire Nr.1 yra akmenų: " . $kibiras1->gautiAkmenuKieki() . "<br>";
  echo "Kibire Nr.2 yra akmenų: " . $kibiras2->gautiAkmenuKieki() . "<br>";
  echo "Kibire Nr.3 yra akmenų: " . $kibiras3->gautiAkmenuKieki() . "<br>";
  echo "Visuose kibiruose yra akmenų: " . Kibiras2::gautiAkmenuKiekiVisuoseKibiruose() . "<br>";
  