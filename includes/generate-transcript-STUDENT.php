<?php

include_once('classes/Extractor.php');
include_once('classes/StudentPortal.php');

$information = Array(
    "localhost",
    "jared",
    "password",
    "csuf"
);

$extractor = new Extractor($information);

$SP = new StudentPortal($extractor);
$CWID = $_POST["student-cwid"];

//print_r($SP->showGrades(887300085));
$webpage = $SP->showGrades($CWID);
echo "$webpage\n";

?>
