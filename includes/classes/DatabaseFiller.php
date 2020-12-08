<?php
class Filler {
    function __construct($xtractor){
        $this->extractor = $xtractor;
        $this->basedir = "../sql_files/";
    }

    function fill() {

        // STEPS
        // 1. Create the structure in which the data should be filled in
        // 2. Fill in the data with pre-determined values
        // 3. Do an example query on the database
        // 4. Drop all tables

        // Simulates as if it's in memory

        // Create the database structure

        $this->extractor->query_file($this->basedir . "create-structure.sql");

        // Fill in data

        $directory = $this->basedir . "/filling";

        $scanned_directory = array_diff(scandir($directory), array('..', '.'));

        foreach($scanned_directory as $file) {
            $format = '%s/%s';
            $path = sprintf($format, $directory, $file);
            echo "$path\n";
            $this->extractor->query_file($path);
        }
    }

    function delete_() {
        $this->extractor->query_file($this->basedir . "delete-database.sql");
    }
};

?>
