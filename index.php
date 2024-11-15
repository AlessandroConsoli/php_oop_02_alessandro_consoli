<?php
class Continent {

    public $nameContinent;

    public function __construct($continent){
        $this->nameContinent = $continent;
    }

}


class GpsLocation extends Continent{

    public $nameContinent;
    public $nameCountry;
    public $nameRegion;
    public $nameProvince;
    public $nameCity;
    public $nameStreet;

    public function __construct($continente, $stato, $regione, $provincia, $città, $via){
        $this->nameContinent = $continente;
        $this->nameCountry = $stato;
        $this->nameRegion = $regione;
        $this->nameProvince = $provincia;
        $this->nameCity = $città;
        $this->nameStreet = $via;
    }

    public function getMyCurrentLocation(){
        echo "Mi trovo in " . $this->nameContinent . ", " . $this->nameCountry . ", " . $this->nameRegion . ", " . $this->nameProvince . ", " . $this->nameCity . ", " .$this->nameStreet;
    }


}

$myLocation = new GpsLocation('Europa', 'Italia', 'Puglia', 'Ba', 'Bari', 'Strada San Giorgio Martire 2D');

$myLocation->getMyCurrentLocation();









?>