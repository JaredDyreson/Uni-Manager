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

$SP = new StudentPortal($extractor);
$CWID = $_POST["student-cwid"];

/*
* Show the grades of a student based on their cwid
*/

$webpage = $SP->showGrades($CWID);
echo "$webpage\n";

?>
