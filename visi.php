<?php

class Baso
{
    public $name;
    protected $harga= "20.000";
    private $tempat;

    public function set_name($n)
    {
        $this->name = $n;
    }


    public function set_tempat($n)
    {
        $this->tempat = $n;
    }

    public function get_name(){
        return $this->name;
    }

    public function get_tempat()
    {
        return $this->tempat;
    }
}

class HargaB extends Baso
{
    public function get_harga()
    {
       return $this->harga;
    }
}
$baso = new Baso();
$baso = new HargaB();
$baso->set_name('Baso');
$baso->get_harga();
$baso->set_tempat('Warung'); // perbaikan: method set_tempat memiliki tingkat visibility private dan tidak bisa diakses dari luar class
echo "Nama Makanan: "  . $baso->get_name() . "</br>" . " Harga: " . $baso->get_harga() . "</br>" . " Tempat: " . $baso->get_tempat(); // Output: Harga: 10000 Tempat: Warung
