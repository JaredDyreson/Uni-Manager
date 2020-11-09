<?php
include_once('Department.php');

class Professor {
    public $ssn;
    public $name;
    public $address;
    public $telephone;
    public $city;
    public $state;
    public $zipcode;

    function __construct($container_){
        list($this->ssn, $this->name, $this->address, $this->telephone, $this->city, $this->state, $this->zipcode) = $container_;
    }
}

$professor_information = array('coffee', 'brown', 'caffeine', 'brown', 'brown', 'brown', 'brown');

$professor = new Professor($professor_information);
$department_information  = array('coffee', 'cheese', 'milk', 'cookies', $professor);

$dep = new Department($department_information);
echo $professor->ssn;

?>
