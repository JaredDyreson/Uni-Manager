<?php
include_once('Student.php');

class Record {
    public $student;
    public $course;
    public $grade;

    function __construct($container_){
        list($this->student, $this->course, $this->grade) = $container_;
    }

}

$student_geolocation_data = array(
    '123 First Avenue',
    'Fullerton',
    'CA',
    '92831'
);

$student_information = array(
    892181921,
    "Jared Dyreson",
    new Geolocation($student_geolocation_data),
    new Telephone("123-456-8921")
);

$student = new Student($student_information);

$record_information = array(
    new Student($student_information),
    12345, 
    'A+'
);

$new_record = new Record($record_information);

?>
