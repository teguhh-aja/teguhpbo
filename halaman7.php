<?php

interface Pembayaran {
    public function bayar($jumlah);
}

class TransferBank implements Pembayaran {
    public function bayar($jumlah) {
        echo "Membayar Rp $jumlah via Transfer Bank";
    }
}

class Ewallet implements Pembayaran {
    public function bayar($jumlah) {
        echo "Membayar Rp $jumlah via E-Wallet";
    }
}

$bayar1 = new TransferBank();
$bayar2 = new Ewallet();

$bayar1->bayar(50000);
echo "<br>";
$bayar2->bayar(75000);

?>