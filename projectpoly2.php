<?php
//contoh implementasi interface
interface Pembayaran {
    public function prosesPembayaran();
}

//contoh implementasi class
class Transferbank implements Pembayaran {
    public function prosesPembayaran() {
        echo "Pembayaran melalui transfer bank";
    }
}

class EWallet implements pembayaran {
    public function prosesPembayaran() {
        echo "pembayaran melalui e-Wallet";
    }
}

class Kartukredit implements Pembayaran {
    public function prosesPembayaran() {
        echo "pembayaran melalui kartu kredit";
    }
}

//contoh pemanggilan 
$p1 = new Transferbank();
$p2 = new EWallet();
$p3 = new KartuKredit();

$p1->prosespembayaran();
echo "<br>";

$p2->prosespembayaran();
echo "<br>";

$p3->prosespembayaran();
echo "<br>";
?>