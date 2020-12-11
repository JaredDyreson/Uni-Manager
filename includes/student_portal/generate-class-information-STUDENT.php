<html>
<head>
    <link rel="stylesheet" href="../../styles.css"></link>
</head>

<?php

include_once('../classes/Extractor.php');
include_once('../classes/StudentPortal.php');

$information = Array(
    "localhost",
    "newuser",
    "password",
    "csuf"
);

$extractor = new Extractor($information);

$SP = new StudentPortal($extractor);
$course = $_POST["course-number"];

$webpage = $SP->listClassInformation($course);
echo "$webpage\n";

?>
