<?php

include_once("Geolocation.php");
include_once("Telephone.php");
include_once("Professor.php");


class Department {
    public $identifier; // Primary Key
    public $name;
    public $telephone;
    public $location;
    public $chairperson;

    function __construct($container_){
        // Assign the values of an array into the attributes of the class Department in order as seen above
        list($this->identifier, $this->name, $this->telephone, $this->location, $this->chairperson) = $container_;
    }
}

/*
* Driver code
*/

//$professor_geolocation_data = array(
    //'123 First Avenue',
    //'Fullerton',
    //'CA',
    //'92831'
//);

//$department_geolocation_data = array(
    //"800 N State College Blvd",
    //"Fullerton",
    //"CA",
    //'92831'
//);

//$professor_information = array(
   //new Geolocation($professor_geolocation_data),
   //'Jared Dyreson', 
   //'M',
   //450000,
   //array('Computer Science', 'Underwater Basket Weaving'),
   //'Professor',
   //'000-00-00', 
   //new Telephone("123-456-7890")
//);

//$departmentInformation = array(
    //10,
    //"Computer Science",
    //new Telephone("789-432-2121"),
    //new Geolocation($department_geolocation_data),
    //new Professor($professor_information)
//);

//$computerScienceDepartment = new Department($departmentInformation);
//echo $computerScienceDepartment->location->address;
?>
