<?php

//include_once("Geolocation.php");
include_once("Telephone.php");
include_once("Professor.php");


class Department {
    public $name;
    public $identifier; // Primary Key
    public $location;
    public $telephone;
    public $chairperson;

    function __construct($container_){
        // Assign the values of an array into the attributes of the class Department in order as seen above
        list($this->name, $this->identifier, $this->location, $this->telephone) = $container_;
        $this->telephone = new Telephone($this->telephone);
    }
}

?>
