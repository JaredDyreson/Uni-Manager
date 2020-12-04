<?php

include_once('classes/Professor.php');
include_once('classes/Extractor.php');

$information = Array(
    "localhost",
    "jared", // change to csuf...
    "password", // change to given in
    "csuf" // change to csuf ...
);


$extractor = new Extractor($information);

function getAllProfessors($xtractor) {
    $contents = $xtractor->query("select * from professor");

    foreach($contents as $professor => $value) {
        $prof = new Professor($value);
        print_r($prof);
    }
}

function getCertainProfessor($xtractor, $ssn){
    $format = 'select * from professor where ssn=%d;';
    $string = sprintf($format, $ssn);
    
    $contents = $xtractor->query($string);
    $container = Array();

    foreach($contents as $professor => $value) {
        array_push($container, new Professor($value));
    }
    return $container;
}

// STEPS
// 1. Create the structure in which the data should be filled in
// 2. Fill in the data with pre-determined values
// 3. Do an example query on the database
// 4. Drop all tables

// Simulates as if it's in memory

// Create the database structure

$extractor->query_file("../sql_files/create-structure.sql");

// Fill in data

$extractor->query_file("../sql_files/fill-structure.sql");

// Get and print data

$result = getCertainProfessor($extractor, 123456781);
//print_r($result[0]);

$contents = $extractor->query("select sections from course");

foreach($contents as $courses => $section) {
    //$prof = new Professor($value);
    //print_r($prof);

    $sections = explode(",", $section[0]);
    foreach($sections as $section){
        print_r($section);
    }
    //print_r($course);
}

$CONTENT = $extractor->query("select");
print_r($CONTENT);

foreach($CONTENT as $courses => $section) {
    //$prof = new Professor($value);
    //print_r($prof);
    print_r($section);

    //print_r($course);
}

// Delete contents

$extractor->query_file("../sql_files/delete-database.sql");

?>

