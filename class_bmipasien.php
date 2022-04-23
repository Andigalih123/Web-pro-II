<?php 
require_once 'class_pasien.php';
require_once 'class_bmi.php';

class BmiPasien {
    public $tanggal;
    public $pasien;
    public $bmi;

    public function __construct($pasien, $bmi){
        $this->pasien = $pasien;
        $this->bmi = $bmi;
    }
}