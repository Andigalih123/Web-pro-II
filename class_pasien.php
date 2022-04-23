<?php

class Pasien {
    public string $id;
    public string $nama;
    public string $email;
    public string $gender;
    public  $usia;

    public function __construct($id, $nama, $gender){
        $this->id = $id;
        $this->nama = $nama;
        $this->gender = $gender;
    }
}