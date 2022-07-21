<?php

include("I2_zad1_parent.php");

class Proizvodi
{
    private $proizvodi = array();

    function Unos()
    {
        while(true)
        {
            $naziv = readline("Naziv proizvoda: ");
            $cijena = readline("Cijena proizvoda: ");
            $jed_mjere = readline("Jedinica mjere(komad/litra/kila): ");

            $proizvod = new Proizvod();
            $proizvod->setNaziv($naziv);
            $proizvod->setCijena($cijena);
            $proizvod->setJedinicaMjere($jed_mjere);

            $this->proizvodi[] = $proizvod;

            $pitanje = readline("Želite li unijeti još proizvoda?(da/ne): ");
            if($pitanje == "ne" || $pitanje == "n");
            {
                break;
            }
        }
    }
    
    function Ispis()
    {
        $ispis = new Proizvod();

        foreach($this->proizvodi as $key => $ispis)
        {
            echo "Naziv proizvoda: " . $ispis->getNaziv() . "\n";
            echo "Cijena: " . $ispis->getCijena() . " " . "kn" . "\n";
            echo "Jedinica mjere: " . $ispis->getJedinicaMjere() . "\n";
        }
    }
}



?>