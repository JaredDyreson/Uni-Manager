<?php
class Geolocation {
    public $address;
    public $city;
    public $state;
    public $zipcode;

    function __construct($container_){
        list($this->address, $this->city, $this->state, $this->zipcode) = $container_;
    }
}
?>
