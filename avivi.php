<?php

class Baso
{
    public $nama;
    protected $alamat= "Cibedug";
    private $jumlahguru;

    public $jumlahsiswa;

    public $jumlahkelas;

    public function set_nama($n)
    {
        $this->nama = $n;
    }


    public function set_guru($n)
    {
        $this->jumlahguru = $n;
    }

    public function set_siswa($n)
    {
        $this->jumlahsiswa = $n;
    }

    public function set_kelas($n)
    {
        $this->jumlahkelas = $n;
    }

    public function get_nama()
    {
        return $this->nama;
    }

    public function get_guru()
    {
        return $this->jumlahguru;
    }

    public function get_siswa()
    {
       return $this->jumlahsiswa;
    }

    public function get_kelas()
    {
       return $this->jumlahkelas;
    }
}

class AlamatB extends Baso
{
    public function get_alamat()
    {
       return $this->alamat;
    }
}
$baso = new Baso();
$baso = new AlamatB();
$baso->set_nama('SMK Paguyuban');
$baso->get_alamat();
$baso->set_guru('69');
$baso->set_siswa('549'); 
$baso->set_kelas('45');
echo "Sekolah: "  . $baso->get_nama() . "</br>" . " Alamat: " . $baso->get_alamat() . "</br>" . " Jumlah guru: " . $baso->get_guru() . "</br>" . " Jumlah Siswa: " . $baso->get_siswa() . "</br>" . " Jumlah Kelas: " . $baso->get_kelas(); // Output: Harga: 10000 Tempat: Warung