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
        list($this->cwid, $this->name, $this->residence, $this->telephone) = $container_;
        $expression = "/(?P<first>[a-zA-Z]+)\s+(?P<last>[a-zA-Z]+)/";

        $matches = array();
        $search = preg_match_all($expression, $this->name, $matches);
        $this->fname = $matches[1][0];
        $this->lname = $matches[2][0];
    }

}

/*
* Driver code
*/

//$student_geolocation_data = array(
    //'123 First Avenue',
    //'Fullerton',
    //'CA',
    //'92831'
//);

//$student_information = array(
    //892181921,
    //"Jared Dyreson",
    //new Geolocation($student_geolocation_data),
    //new Telephone("123-456-8921")
//);

//$student = new Student($student_information);
?>
