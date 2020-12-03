<?php
include_once('Geolocation.php');
include_once('Telephone.php');

class Professor {
    public $geolocation;
    public $name;
    public $sex;
    public $salary;
    public $position;
    public $degrees; // Computer Science, Computer Engineering (comma separated)
    public $ssn; // Primary Key
    public $telephone;

    function __construct($container_){
        list($this->geolocation, $this->name, $this->sex, $this->salary, $this->position, $this->degrees, $this->ssn, $this->telephone) = $container_;
        $this->degrees = explode(",", $this->degrees);

        $geolocation_expression_ = "/(.*)\,\s*(\w+)\,\s*([A-Z]{2})\s+([0-9]{5})/";
        $matches = array();
        $search = preg_match_all($geolocation_expression_, $this->geolocation, $matches);
        $information = array();
        for($i = 1; $i < count($matches); $i++){
            array_push($information, $matches[$i][0]);
        }
        $this->geolocation = new Geolocation($information);
        $this->telephone = new Telephone($this->telephone);
    }
}

?>
