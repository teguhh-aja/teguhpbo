<?php

abstract class Kendaraan {
    abstract public function bergerak();
}

class Motor extends Kendaraan {
    public function bergerak() {
        echo "Motor berjalan di jalan";
    }
}

class Kapal extends Kendaraan {
    public function bergerak() {
        echo "Kapal berlayar di laut";
    }
}

$motor = new Motor();
$kapal = new Kapal();

$motor->bergerak();
echo "<br>";
$kapal->bergerak();

?>