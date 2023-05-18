<?php

require_once 'Animal.php';

class Cat extends Animal{
    public function __construct($nama)
    {
        $this->nama = $nama;
        $this->jenis = "Kucing";

        $this->getInfo();
    }

    // method
    public function getInfo(){
        return "Hewan ini adalah ".$this->nama. " jenis ".$this->jenis.". "
        .$this->jenis." adalah hewan yang suka bermain dan bersih";
    }
}

?>