<?php
/*
* Sourced from https://www.youtube.com/watch?v=ILyf16MEvHM
*/

class Person {
    public $name;

    function __construct($name_){
        $this->name = $name_;
    }
    
    function get_name(){
        return $this->name;
    }
}

class Professor {
    public $name;
    public $name;
    public $address;
    public $telephone;
    public $city;
    public $state;
    public $zipcode;

    function __construct($container_){
        list($ssn_, $name_, $address_, $telephone_, $city_, $state_, $zipcode_) = $container_;
        $this->ssn = $ssn_;
        $this->name = $name_;
        $this->address = $address_;
        $this->telephone = $telephone_;
        $this->city = $city_;
        $this->state = $state_;
        $this->zipcode = $zipcode_;
    }
    
    function get_name(){
        return $this->name;
    }
}

$dbServerName = "localhost";
$dbUserName = "cs332f11";
$dbPassword = "Moadel0k";
$dbName = "cs332f11";
$connection = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

$sql = "SELECT * FROM users";
$result = mysqli_query($connection, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        $prof = new Professor($row);
    }
} else {
    echo "oops";
}
?>

