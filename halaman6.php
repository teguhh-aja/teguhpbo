<?php

interface Kendaraan {
    public function jalan();
}

class Mobil implements Kendaraan {
    public function jalan() {
        echo "Mobil berjalan di jalan raya";
    }
}

class Pesawat implements Kendaraan {
    public function jalan() {
        echo "Pesawat terbang di udara";
    }
}

$mobil = new Mobil();
$pesawat = new Pesawat();

$mobil->jalan();
echo "<br>";
$pesawat->jalan();

?>