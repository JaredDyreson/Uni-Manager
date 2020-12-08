<?php

include_once("Geolocation.php");
include_once("Telephone.php");

class Student {
    public $cwid; //Primary key
    public $name;
    public $fname;
    public $lname;
    public $residence;
    public $telephone;

    function __construct($container_){
        list($this->name, $this->cwid, $this->residence, $this->telephone) = $container_;
        $expression = "/(\w+\s*)/";

        $matches = array();
        $search = preg_match_all($expression, $this->name, $matches);
        list($this->fname, $this->lname) = $matches[0];
        $this->residence = new Geolocation($this->residence);
        $this->telephone = new Telephone($this->telephone);
    }

}

?>
