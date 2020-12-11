<html>
<head>
    <link rel="stylesheet" href="../styles.css"></link>
</head>

<?php


 include_once('classes/DatabaseFiller.php');
include_once('classes/Extractor.php');
include_once('classes/ProfessorPortal.php');
include_once('classes/StudentPortal.php');

$information = Array(
    "localhost",
    "jared",
    "password",
    "csuf"
);

$extractor = new Extractor($information);

/*
* Should be not have to be done in production
* will be removed when not needed
*/

 //$fillem = new Filler($extractor);
 //$fillem->fill();


/*
* Actions done by the webpage
*/
//$PP = new ProfessorPortal($extractor);

// needs to be generating html

//$webpage =  $PP->listCourses(26038);
//echo "$webpage\n";
$SP = new StudentPortal($extractor);
echo $SP->listClassInformation(332);

//print_r($SP->showGrades(887300085));
// $fillem->delete_();

?>

