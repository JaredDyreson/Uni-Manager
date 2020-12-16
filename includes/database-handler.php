<?php


include_once('classes/DatabaseFiller.php');
include_once('classes/Extractor.php');
include_once('classes/ProfessorPortal.php');
include_once('classes/StudentPortal.php');

$information = Array(
    "localhost",
    "cs332f11",
    "password",
    "cs332f11"
);

$extractor = new Extractor($information);

$fillem = new Filler($extractor);
$fillem->fill();

?>

