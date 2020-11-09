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
        $person = new Person($row['user_first']);
        echo "I can't believe that worked";
    }
} else {
    echo "oops";
}
?>

