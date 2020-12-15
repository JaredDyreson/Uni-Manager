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


/*
* List all the information about the class a current professor is teaching given SSN
*/

$PP = new ProfessorPortal($extractor);

$webpage = $PP->listCourse(315, 


?>
