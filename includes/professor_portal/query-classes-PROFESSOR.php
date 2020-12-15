<html>
<head>
    <link rel="stylesheet" href="../../styles.css"></link>
</head>

<?php

include_once('../classes/Extractor.php');
include_once('../classes/ProfessorPortal.php');
echo "cant make it here";

$information = Array(
    "localhost",
    "jared",
    "password",
    "csuf"
);

$extractor = new Extractor($information);

$PP = new ProfessorPortal($extractor);

$courseID = 25620;
$courseNumber = 332;

//$courseID = $_POST["course-section"];
//$courseNumber = $_POST["course-number"];

$webpage =  $PP->listCourses($courseNumber, $courseID);
echo "$webpage\n";

?>
