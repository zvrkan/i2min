<?php

/*Napišite  klasu koja može čuvati podatke  o jednom  proizvodu 
neke Internetske  trgovine. Svaki proizvod opisan  je sljedećim atributima: naziv, cijena i jedinica  mjere (komad, litra, 
kg  itd.)  U  program  učitajte  proizvoljan  broj  proizvoda  putem  komandne  linije. Nije  dopušten  izravan  pristup 
atributima.  Obvezno  se  moraju  kreirati getter  i setter metode.  Svi podaci  o proizvodu  moraju  se obvezno  predati 
klasi prilikom instanciranja  objekta.   
Stvorite drugu  klasu koja ima ulogu  upravitelja  (managera)  i kontrolira  rad s podacima  putem dviju metoda Unos  i 
Ispis.  Unos metoda zadužena je za unos proizvoda i mora se automatski pokrenuti prilikom instanciranja  objekata. 
Metoda Ispis zadužena  je za prikaz svih unesenih  proizvoda  i mora se pokrenuti  automatski  na kraju unosa.
*/

class Proizvod
{
    private $naziv;
    private $cijena;
    private $jedinica_mjere;

    function setNaziv($p1)
    {
        $this->naziv = $p1;
    }
    function getNaziv()
    {
        return $this->naziv;
    }

    function setCijena($p2)
    {
        $this->cijena = $p2;
    }
    function getCijena()
    {
        return $this->cijena;
    }

    function setJedinicaMjere($p3)
    {
        $this->jedinica_mjere = $p3;
    }
    function getJedinicaMjere()
    {
        return $this->jedinica_mjere;
    }
}


?>