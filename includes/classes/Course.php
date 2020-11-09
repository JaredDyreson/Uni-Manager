<?php
class Course {
    public $identifier;
    public $title;
    public $textbook;
    public $units;
    public $department;
    public $preReqs;

    function __construct($container_){
        // Assign the values of an array into the attributes of the class Department in order as seen above
        list($this->identifier, $this->title, $this->textbook, $this->units, $this->department, $this->preReqs) = $container_;
    }
}

class Section extends Course {
    /*
    * This is still borked
    */
    public $number;
    public $classroom;
    public $seatingAvailble;
    public $meetingDays;
    public $startTime;
    public $endTime;

    function __construct($container_){
        // Assign the values of an array into the attributes of the class Department in order as seen above
        list($this->identifier, $this->title, $this->textbook, $this->units, $this->department, $this->preReqs) = $container_;
    }
}

?>
