<html>
<head>
    <link rel="stylesheet" href="../../styles.css"></link>
</head>

<?php

include_once('classes/Extractor.php');
include_once('classes/DatabaseFiller.php');

$information = Array(
    "localhost",
    "jared", // change
    "password",
    "csuf"
);

$extractor = new Extractor($information);

/*
* Should be not have to be done in production
* will be removed when not needed
*/

$fillem = new Filler($extractor);
$fillem->delete_();

?>

