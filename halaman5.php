<?php

class Hewan {
    public function suara() {
        echo "Hewan mengeluarkan suara";
    }
}

class Kucing extends Hewan {
    public function suara() {
        echo "Kucing mengeong";
    }
}

class Anjing extends Hewan {
    public function suara() {
        echo "Anjing menggonggong";
    }
}

$kucing = new Kucing();
$anjing = new Anjing();

$kucing->suara();
echo "<br>";
$anjing->suara();

?>