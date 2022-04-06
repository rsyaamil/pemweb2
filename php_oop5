<?php

class Dispenser{
    public $volume;
    public $hargasegelas;
    public $volumeGelas;
    public $namaMinuman;
    public const PHI = 3.14;
    public $jarijari;
    public $tinggi;

    public function __construct($jarijari, $tinggi){
        $this->jarijari = $jarijari;
        $this->tinggi = $tinggi;
        
    }

    public function volumwadah(){
        return self::PHI * $this->jarijari * $this->jarijari * $this -> tinggi;
    }
}

class hargagelas extends Dispenser{

    public function __construct($hargasegelas){
        $this->hargaSegelas = $hargasegelas;
        echo "<br/>Harga satu gelas : " . $hargasegelas;
    }
    public function harga(){
        return $this -> hargaSegelas * 40 ;
    }
}
    echo "<br/> Diketahui : ";
    echo "<br/>  PHI : " . Dispenser::PHI;
    $volumwadah = new Dispenser(35, 40);
    $hargagelas = new hargagelas(10000);
    echo "<br/> Volume Dispenser : " . $volumwadah -> volumwadah() . " cm3";
    echo "<br/> Harga 30 gelas : " . $hargagelas -> harga();

?>