<?php

/*Napišite program za čitanje tekstualne datoteke s polaznicima PHP 
tečaja.  Za  potrebe  zadatka  sami  stvorite  datoteku  polaznici.txt.  Podaci  za  datoteku  se  nalaze  ispod  zadatka. 
Definirajte  klasu  koja opisuje  jednog  polaznika.  Napišite  drugu  klasu koja mora implementirati  metodu za čitanje 
podataka iz tekstualne datoteke i stvaranje  objekata za svakog polaznika  te pohranu tih objekata u zajedničku listu. 
Klasa  mora imati i drugu  metodu za ispis  na ekran svih polaznika koji su završili tečaj iz tekstualne  datoteke.  Prva 
metoda za čitanje se mora automatski pokrenuti prilikom instanciranja  objekta druge  klase. 
 
 
Prezime;Ime;Zavrsio 
Ivic;Ivo;DA 
Maric;Marko;NE 
Anic;Ana;NE 
Peric;Petar;DA
*/

class Polaznik 
{
    private $ime;
    private $prezime;
    private $zavrsio;

    function setIme($p1)
    {
        $this->ime = $p1;
    }
    function getIme()
    {
        return $this->ime;
    }

    function setPrezime($p2)
    {
        $this->prezime = $p2;
    }
    function getPrezime()
    {
        return $this->prezime;
    }

    function setZavrsio($p3)
    {
        $this->zavrsio = $p3;
    }
    function getZavrsio()
    {
        return $this->zavrsio;
    }
}

?>