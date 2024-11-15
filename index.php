<?php
class Continent {

    public $nameContinent;

    public function __construct($continente){
        $this->nameContinent = $continente;
    }

}

class Country extends Continent{

    public $nameCountry;

    public function __construct($continente, $stato){
        parent::__construct($continente);
        $this->nameCountry = $stato;
    }


}


class Region extends Country{

    public $nameRegion;

    public function __construct($continente, $stato, $regione){
        parent::__construct($continente, $stato);
        $this->nameRegion = $regione;
    }
}


class Province extends Region{

    public $nameProvince;

    public function __construct($continente, $stato, $regione, $provincia){
        parent::__construct($continente, $stato, $regione);
        $this->nameProvince = $provincia;
    }

}

class City extends Province{

    public $nameCity;

    public function __construct($continente, $stato, $regione, $provincia, $città){
        parent::__construct($continente, $stato, $regione, $provincia);
        $this->nameCity = $città;
    }

}


class Street extends City{

    public $nameStreet;

    public function __construct($continente, $stato, $regione, $provincia, $città, $via){
        parent::__construct($continente, $stato, $regione, $provincia, $città);
        $this->nameStreet = $via;
    }

    public function getMyCurrentLocation(){
        echo "Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet";
    }

}


$myLocation = new Street('Europa', 'Italia', 'Puglia', 'Ba', 'Bari', 'Strada San Giorgio Martire 2D');

$myLocation->getMyCurrentLocation();








?>