<html>
<head>
    <link rel="stylesheet" href="../../styles.css"></link>
</head>

<?php

echo "the hell is going on ";

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
$SSN = 123456781;

//$courseID = $_POST["course-section"];
//$courseNumber = $_POST["course-number"];

/*
* List all the information about the class a current professor is teaching given SSN
*/

$webpage =  $PP->listSectionsCurrentlyTaught($SSN);
echo "$webpage\n";

?>
