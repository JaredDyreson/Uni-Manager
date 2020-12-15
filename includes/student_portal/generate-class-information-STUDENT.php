<html>
<head>
    <link rel="stylesheet" href="../../styles.css"></link>
</head>

<?php

include_once('../classes/Extractor.php');
include_once('../classes/StudentPortal.php');

$information = Array(
    "localhost",
    "cs332f11",
    "Moadel0k",
    "cs332f11"
);

$extractor = new Extractor($information);

/*
* Get class information given the course number
*/

$SP = new StudentPortal($extractor);
$course = $_POST["course-number"];

$webpage = $SP->listClassInformation($course);
echo "$webpage\n";

?>
