<?php

class Pinigine {
  private $popieriniaiPinigai = 0;
  private $metaliniaiPinigai = 0;

  public function ideti($kiekis) {
    if ($kiekis <= 2) {
      $this->metaliniaiPinigai += $kiekis;
    } else {
      $this->popieriniaiPinigai += $kiekis;
    }
  }

  public function skaiciuoti() {
    $suma = $this->popieriniaiPinigai + $this->metaliniaiPinigai;
    echo "Popieriniai pinigai: {$this->popieriniaiPinigai} <br>";
    echo "Metaliniai pinigai: {$this->metaliniaiPinigai} <br>";
    echo "Viso pinigų: $suma";
  }
}


