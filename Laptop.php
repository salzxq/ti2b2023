<?php
include_once "Device.php";

class Laptop implements Device{
    public function lihat_RAM(): void{
        echo "8 GB";
    }

    public function lihat_Harga(): void{
        echo "6.000.000";
    }
}