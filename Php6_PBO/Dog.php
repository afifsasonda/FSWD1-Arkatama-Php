<?php

require_once 'Animal.php';

class Dog extends Animal{
    public function __construct($nama)
    {
        $this->nama = $nama;
        $this->jenis = "anjing";

        $this->getInfo();
    }

    // method
    public function getInfo(){
        return "Hewan ini adalah ".$this->nama. " jenis ".$this->jenis.". "
        .$this->jenis." adalah hewan yang setia dan cerdas";
    }
}

?>