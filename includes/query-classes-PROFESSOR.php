<html>
<head>
    <link rel="stylesheet" href="../styles.css"></link>
</head>

<?php

include_once('classes/Extractor.php');
include_once('classes/ProfessorPortal.php');

$information = Array(
    "localhost",
    "newuser",
    "password",
    "csuf"
);

$extractor = new Extractor($information);

$PP = new ProfessorPortal($extractor);

$webpage =  $PP->listCourses();
echo "$webpage\n";

?>
