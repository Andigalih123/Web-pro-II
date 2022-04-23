<?php

class Bmi{
    public  $berat_badan;
    public  $tinggi_badan;
    public function __construct($berat_badan, $tinggi_badan)
    {
     $this->berat_badan = $berat_badan;
     $this->tinggi_badan = $tinggi_badan;    
    }
    public function nilai_bmi(){
        $tb = (float)$this->tinggi_badan/100;
        $nilai_tb = (float)$tb * (float)$tb;
        if ($nilai_tb != 0){ 
             $nilai_bmi = (float)$this->berat_badan/(float)$nilai_tb;
            return round($nilai_bmi,2);
        }  
    }

   
    public function status_bmi(){
        $tb = (float)$this->tinggi_badan/100;
        $nilai_tb = (float)$tb * (float)$tb;
        if ($nilai_tb != 0){ 
            $nilai_bmi = (float)$this->berat_badan/(float)$nilai_tb;
            if ($nilai_bmi < 18.5) {
                return "Kekurangan Berat Badan";
            }elseif($nilai_bmi <24.9){
                return "Normal (ideal)";
            }elseif($nilai_bmi < 29.9){
                return "Kelebihan Berat Badan";
            }else{
                return "Kegemukan (Obesitas)";
        } 
        }   
}
}