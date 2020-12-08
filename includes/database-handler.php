<?php

include_once('classes/Professor.php');

/*
* Sourced from https://www.youtube.com/watch?v=ILyf16MEvHM
*/

class Extractor {
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $connection;

    function __construct($container_){
        list($this->servername, $this->username, $this->password, $this->dbname) = $container_;
        $this->connection = new PDO(
            "mysql:host=$this->servername; dbname=$this->dbname",
            $this->username,
            $this->password
        );
    }

    function query($command) {
        $statement = $this->connection->prepare($command);
        //return $statement->execute() ? $statement->fetchAll(PDO::FETCH_ASSOC) : Array();
        return $statement->execute() ? $statement->fetchAll(PDO::FETCH_NUM) : Array();
    }

    function query_file($path){
        $contents = $this->boilFile($path);
        return $this->query($contents);
    }


    function boilFile($path) {
        return file_get_contents($path);
    }

    function showTables(){
        $tables = Array();
        $contents = "show tables;";
        $contents = $this->query($contents);
        foreach($contents as $table) {
            array_push($tables, $table[0]);
        }
        print_r($tables);
    }

};

$information = Array(
    "localhost",
    "jared",
    "password",
    "csuf"
);

$extractor = new Extractor($information);

// STEPS
// 1. Create the structure in which the data should be filled in
// 2. Fill in the data with pre-determined values
// 3. Do an example query on the database
// 4. Drop all tables

// Simulates as if it's in memory

// Create the database structure

$extractor->query_file("../sql_files/create-structure.sql");

// Fill in data

$extractor->query("select");

$directory = "../sql_files/filling";

$scanned_directory = array_diff(scandir($directory), array('..', '.'));

foreach($scanned_directory as $file) {
    $format = '%s/%s';
    $path = sprintf($format, $directory, $file);
    echo "$path\n";
    $extractor->query_file($path);
}

// Delete contents

//$extractor->query_file("../sql_files/delete-database.sql");

?>

