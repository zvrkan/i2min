<?php

include("I2_zad2_parent.php");

class Polaznici
{
    private $polaznici = array();

    function Unos()
    {
        $polaznik1 = new Polaznik();
        $polaznik1->setIme("Ivo");
        $polaznik1->setPrezime("Ivic");
        $polaznik1->setZavrsio("DA");
        $this->polaznici[] = $polaznik1;

        $polaznik2 = new Polaznik();
        $polaznik2->setIme("Marko");
        $polaznik2->setPrezime("Maric");
        $polaznik2->setZavrsio("NE");
        $this->polaznici[] = $polaznik2;

        $polaznik3 = new Polaznik();
        $polaznik3->setIme("Ana");
        $polaznik3->setPrezime("Anic");
        $polaznik3->setZavrsio("NE");
        $this->polaznici[] = $polaznik3;

        $polaznik4 = new Polaznik();
        $polaznik4->setIme("Petar");
        $polaznik4->setPrezime("Peric");
        $polaznik4->setZavrsio("DA");
        $this->polaznici[] = $polaznik4;
    }

    function Ispis()
    {
        foreach($this->polaznici as $key => $polaznik)
        {
            echo "Prezime: " . $polaznik->getPrezime() . "\n";
            echo "Ime: " . $polaznik->getIme() . "\n";
            echo "Zavrsio/la: " . $polaznik->getZavrsio() . "\n";
        }
    }
}


?>