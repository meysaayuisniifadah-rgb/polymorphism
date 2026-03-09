<?php
//contoh abstract class
abstract class Kendaraan {
    abstract public function berjalan();
}

//contoh child class
class Mobil extends Kendaraan {
    public function berjalan() {
        echo "Mobil berjalan di jalan raya";
    }
}

class Kapal extends Kendaraan {
    public function berjalan() {
        echo "Kapal berlayar di laut";
    }
}

//pemanggilan
$mobil = new Mobil();
$kapal = new Kapal();

$mobil->berjalan();
echo "<br>";

$kapal->berjalan();
echo "<br>";
?>
