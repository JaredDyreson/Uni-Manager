<?php

date_default_timezone_set("America/Los_Angeles"); 

class StudentPortal {
    function __construct($xtractor){
        $this->extractor = $xtractor;
    }

    function showGrades($CWID){
$format = <<<'EOT'
select title, subPull.grade from (
    select * from record where student_cwid=%d
) subPull
join (
    select section, title
    from course
) subCourse where subCourse.section=subPull.course_id group by title;
EOT;

        $query = sprintf($format, $CWID);
        $response = $this->extractor->query($query);
	$tables = Array();

        foreach($response as $line){

            list($class, $grade) = $line;

$tableformat = <<<EOT
<tr>
<td>$class</td>
<td>$grade</td>
</tr>
EOT;
            array_push($tables, $tableformat);
	}
        $tableView = implode(" ", $tables);
        $timeStamp = date('l jS \of F Y \a\t H:i:s');

$HTMLCODE = <<<EOT
<center>
<h1>Grades Report for $CWID</h1>
<table>
<tr>
<td>Class</td>
<td>Grade</td>
</tr>
$tableView
</table>
Generated on: $timeStamp
</center>
EOT;

        return $HTMLCODE;
    }

    function listClassInformation($CLASS){
$query = <<<EOT
select course_.section, section_.classroom, section_.seats, section_.meeting_days, section_.beginning_time, section_.ending_time from (
    select *
    from course where number_=$CLASS
) course_
join (
    select *
    from section
) section_ where course_.section=section_.number_;
EOT;
        $response =  $this->extractor->query($query);
        $tables = Array();


        foreach($response as $line){

            list($section, $seats, $classroom, $days, $start, $end) = $line;

$tableformat = <<<EOT
<tr>
<td>$section</td>
<td>$seats</td>
<td>$classroom</td>
<td>$days</td>
<td>$start</td>
<td>$end</td>
</tr>
EOT;

            array_push($tables, $tableformat);
	    }

        $titleQuery = "select title from course where number_=%d;";
        $titleQuery = sprintf($titleQuery, $CLASS);
        $titleResult =  $this->extractor->query($titleQuery)[0][0];

        $timeStamp = date('l jS \of F Y \a\t H:i:s');
        $tables = implode(" ", $tables);

$HTMLCODE = <<<EOT
<center>
<h1>Section Report for $titleResult</h1>
<table>
<tr>
<td>Section</td>
<td>Seats</td>
<td>Classroom</td>
<td>Meeting Days</td>
<td>Start</td>
<td>End</td>
</tr>
$tables
</table>
Generated on: $timeStamp
</center>
EOT;

        return $HTMLCODE;
    }
};
?>
