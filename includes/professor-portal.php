<?php

include_once('classes/Extractor.php');
include_once('classes/Professor.php');
include_once('classes/Student.php');

$information = Array(
    "localhost",
    "jared", // change to csuf...
    "password", // change to given in
    "csuf" // change to csuf ...
);


$extractor = new Extractor($information);

function createStructure($xtractor){
    // STEPS
    // 1. Create the structure in which the data should be filled in
    // 2. Fill in the data with pre-determined values
    // 3. Do an example query on the database
    // 4. Drop all tables

    // Simulates as if it's in memory

    // Create the database structure

    $xtractor->query_file("../sql_files/create-structure.sql");

    // Fill in data


    $directory = "../sql_files/filling";

    $scanned_directory = array_diff(scandir($directory), array('..', '.'));

    foreach($scanned_directory as $f) {
        $format = '%s/%s';
        $path = sprintf($format, $directory, $f);

        $extractor->query_file($path);
    }
    // TODO
    // Get and print data

    // Delete contents

}

function getAllProfessors($xtractor) {
    $contents = $xtractor->query("select * from professor");

    foreach($contents as $professor => $value) {
        $prof = new Professor($value);
        print_r($prof);
    }
}

function getCertainProfessor($xtractor, $ssn) {
    $format = 'select * from professor where ssn=%d;';
    $string = sprintf($format, $ssn);
    
    $contents = $xtractor->query($string);
    $container = Array();

    foreach($contents as $professor => $value) {
        array_push($container, new Professor($value));
    }
    return $container;
}

function getAllStudents($xtractor){
    $contents = $xtractor->query("select * from student");

    foreach($contents as $students => $values) {
        $student = new Student($values);
        print_r($student);
    }
}

function getCertainStudent($xtractor, $studentName){
    $format = 'select * from student where fullname="%s";';
    $string = sprintf($format, $studentName);

    $contents = $xtractor->query($string);

    foreach($contents as $students => $values) {
        $student = new Student($values);
        print_r($student);
    }
}

createStructure($extractor);
$contents = $extractor->query_file("../sql_files/requirements/professor/professor-classes.sql");
print_r($contents);
$xtractor->query_file("../sql_files/delete-database.sql");

?>

