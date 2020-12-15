<html>
<head>
    <link rel="stylesheet" href="../../styles.css"></link>
</head>

<?php

include_once('../classes/Extractor.php');
include_once('../classes/ProfessorPortal.php');

$information = Array(
    "localhost",
    "cs332f11",
    "Moadel0k",
    "cs332f11"
);

$extractor = new Extractor($information);

$PP = new ProfessorPortal($extractor);

/*
* List grade distribution based on section and number
*/

$courseID = $_POST["course-section"];
$courseNumber = $_POST["course-number"];

$webpage =  $PP->listCourses($courseNumber, $courseID);
echo "$webpage\n";

?>
