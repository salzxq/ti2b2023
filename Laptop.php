dc <?php
include_once "Device.php";

class Laptop implements Device{
    public function namaMerk(): void{
        echo "Asus";
    }

    public function harga(): void{
        echo "6.000.000";
    }
}