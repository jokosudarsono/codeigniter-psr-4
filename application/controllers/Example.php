<?php

use App\Libraries\Persegi;

class Example extends MainController
{
    public function index()
    {
        $persegi = new Persegi();
        $persegi->lebar(10);
        $persegi->panjang(20);
        $result = $persegi->luas();

        print 'luas persegi adalah : ' . $result;
    }
}