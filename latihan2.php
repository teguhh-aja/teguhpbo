<?php

interface Notifikasi {
    public function kirim($pesan);
}

class Email implements Notifikasi {
    public function kirim($pesan) {
        echo "Mengirim Email: $pesan";
    }
}

class SMS implements Notifikasi {
    public function kirim($pesan) {
        echo "Mengirim SMS: $pesan";
    }
}

class WhatsApp implements Notifikasi {
    public function kirim($pesan) {
        echo "Mengirim WhatsApp: $pesan";
    }
}

$email = new Email();
$sms = new SMS();
$wa = new WhatsApp();

$email->kirim("Pesanan Anda berhasil!");
echo "<br>";
$sms->kirim("Kode OTP Anda 1234");
echo "<br>";
$wa->kirim("Promo diskon hari ini");

?>