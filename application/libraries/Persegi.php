<?php

namespace App\Libraries;

class Persegi
{
    private $lebar;
    private $panjang;

    public function lebar($angka)
    {
        $this->lebar = $angka;
    }

    public function panjang($angka)
    {
        $this->panjang = $angka;
    }

    public function luas()
    {
        $result = $this->lebar * $this->panjang;
        return $result;
    }
}