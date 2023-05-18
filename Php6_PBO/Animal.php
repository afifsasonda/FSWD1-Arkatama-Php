<?php

// class animal
class Animal{

    // property
    public $nama;
    public $jenis;

    // constructor
    public function __construct($nama,$jenis){
        $this->nama = $nama;
        $this->jenis = $jenis;

        echo $this->getInfo();
    }

    // method
    public function getInfo(){
        return "Hewan ini adalah ".$this->nama. " jenis ".$this->jenis;
    }
}

?>