<?php

require __DIR__.'/Pinigine.php';

$pinigine = new Pinigine();
$pinigine->ideti(rand(0, 5)); // Pridedame 1 metalinę monetą
$pinigine->ideti(rand(0, 50)); // Pridedame 5 popierines kupiūras
$pinigine->ideti(0.5); // Pridedame 0.5 metalinės monetos
$pinigine->skaiciuoti(); // Atspausdiname pinigų sumą

