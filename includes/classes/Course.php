<?php

include_once('Section.php');
class Course {
    public $identifier; // Primary key
    public $title;
    public $textbook;
    public $units;
    public $department;
    public $preReqs;
    public $sections;

    function __construct($container_){
        // Assign the values of an array into the attributes of the class Department in order as seen above
        list($this->identifier, $this->title, $this->textbook, $this->units, $this->department, $this->preReqs) = $container_;
    }
}

/*
* Driver code
*/

//$meetings = array(
    //["Monday", "Wednesday", "Friday"],
    //date("14:00:00"),
    //date("15:45:00")
//);

//$dataStructures = array(
      //131,
      //"Data Structures and Algorithms",
      //"Data Structures and Algortihms in C++",
      //3,
      //"Computer Science",
      //[], //for the sake of simplicity, no pre-reqs
      //[new Section(01, "CS-131", 30, 15, new Meeting($meetings))] // only one section
//);

//$coursePrereqs = array(
    //new Course($dataStructures)
//);

//$courseInformation = array(
    //332,
    //"Database and File Structures",
    //"Introduction to SQL Databases",
    //3,
    //"Computer Science",
    //$coursePrereqs,
    //[new Section(01, "CS-332", 40, 15, new Meeting($meetings))] // only one section
//);

//$databasesCourse = new Course($courseInformation);
//foreach($databasesCourse->preReqs as &$value){
    //echo $value->identifier;
//}
?>
