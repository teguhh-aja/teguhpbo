<?php

class BangunDatar {
    public function hitungLuas() {
        echo "Menghitung luas bangun datar";
    }
}

class Persegi extends BangunDatar {
    public function hitungLuas() {
        $sisi = 4;
        echo "Luas Persegi: " . ($sisi * $sisi);
    }
}

class Lingkaran extends BangunDatar {
    public function hitungLuas() {
        $r = 7;
        echo "Luas Lingkaran: " . (3.14 * $r * $r);
    }
}

class Segitiga extends BangunDatar {
    public function hitungLuas() {
        $alas = 6;
        $tinggi = 8;
        echo "Luas Segitiga: " . (0.5 * $alas * $tinggi);
    }
}

?>