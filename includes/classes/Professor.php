<?php
include_once('Geolocation.php');
include_once('Telephone.php');

class Professor {
    public $geolocation;
    public $name;
    public $sex;
    public $salary;
    public $position;
    public $degrees;
    public $ssn; // Primary Key
    public $telephone;

    function __construct($container_){
        list($this->geolocation, $this->name, $this->sex, $this->salary, $this->degrees, $this->position, $this->ssn, $this->telephone) = $container_;
    }
}

/*
* This is example driver code
*/

//$professor_geolocation_data = array(
    //'123 First Avenue',
    //'Fullerton',
    //'CA',
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

//$professor = new Professor($professor_information);

?>
