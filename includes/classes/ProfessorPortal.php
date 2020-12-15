<?php


date_default_timezone_set("America/Los_Angeles"); 

class ProfessorPortal {
    public $extractor;
    function __construct($xtractor) {
        $this->extractor = $xtractor;
    }

    function listCourses($courseNumber, $courseID){
$format = <<<EOT
select record_.grade, count(*) from(
    select * from record where course_id=$courseID
) record_
join (
        select * from course where number_=$courseNumber
) course_ where course_.section=$courseID
group by grade;
EOT;

        $output = $this->extractor->query($format);
        $tables = Array();

        foreach($output as $value){
            list($grade, $gradeCount) = $value;

$tableformat = <<<EOT
<tr>
<td>$grade</td>
<td>$gradeCount</td>
</tr>
EOT;

            array_push($tables, $tableformat);
        }
        $tables = implode(" ", $tables);
        $timeStamp = date('l jS \of F Y \a\t H:i:s');

$format = <<<EOT
<center>
<h1>Grades Report for $courseNumber - $courseID</h1>
<table>
<tr>
<td>Grade</td>
<td>Number</td>
</tr>
$tables
</table>
<br></br>
Generated on: $timeStamp
</center>
EOT;

        return $format;
    }
    function listSectionsCurrentlyTaught($SSN){

$format = <<<EOT
select course_.title, section_.classroom, section_.meeting_days, section_.beginning_time, section_.ending_time, section_.seats from (
select *
from section where professor=$SSN
) section_
join (
select * from course 
) course_ where section_.number_=course_.section
EOT;

        $output = $this->extractor->query($format);
        $tables = Array();

        foreach($output as $value){
            list($title, $classroom, $meeting_days, $beginning_time, $ending_time, $seats) = $value;

$tableformat = <<<EOT
<tr>
<td>$title</td>
<td>$classroom</td>
<td>$meeting_days</td>
<td>$beginning_time</td>
<td>$ending_time</td>
<td>$seats</td>
</tr>
EOT;

            array_push($tables, $tableformat);
        }
        $tables = implode(" ", $tables);
        $timeStamp = date('l jS \of F Y \a\t H:i:s');

$format = <<<EOT
<center>
<h1>Course Manifest for $SSN</h1>
<table>
<tr>
<td>Title</td>
<td>Classroom</td>
<td>Meeting Days</td>
<td>Beginning Time</td>
<td>Ending Time</td>
<td>Seats</td>
</tr>
$tables
</table>
<br></br>
Generated on: $timeStamp
</center>
EOT;

        return $format;
    }
}

?>
