<?php
class Geolocation {
    public $full;
    public $address;
    public $city;
    public $state;
    public $zipcode;

    function __construct($container_){
        $this->full = $container_;
        $expression = "/([a-zA-Z]{2})\s*(\d{5})/";
        $temp;
        list($this->address, $this->city, $temp) = explode(",",  $this->full);
        $matches = array();
        $search = preg_match_all($expression, $temp, $matches);
        $this->state = $matches[1][0];
        $this->zipcode = $matches[2][0];
    }
}
?>
