<?php

date_default_timezone_set('America/Los_Angeles'); // otherwise resorts to UTC

class Meeting {
    public $days;
    public $start;
    public $end;

    function __construct($container_){
        list($this->days, $this->start, $this->end) = $container_;
    }
}

class Section {
    public $number; // Primary Key
    public $classroom;
    public $seats;
    public $currentOccupancy; // derived from seats
    public $meetingDays;

    function __construct($container_){
        list($this->number, $this->classroom, $this->seats, $this->currentOccupancy, $this->meetingDays) = $container_;
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

//$section_information = array(
    //100,
    //"CS-123",
    //30,
    //15,
    //new Meeting($meetings)
//);


//$section = new Section($section_information);

?>
