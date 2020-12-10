<?php

date_default_timezone_set("America/Los_Angeles"); 
class StudentPortal {
    function __construct($xtractor){
        $this->extractor = $xtractor;
    }

    function showGrades($CWID){
        $format = <<<'EOD'
        select title, subPull.grade from (
            select * from record where student_cwid=%d
        ) subPull
        join (
            select section, title
            from course
        ) subCourse where subCourse.section=subPull.course_id group by title;
        EOD;

        $query = sprintf($format, $CWID);
        $response = $this->extractor->query($query);
        $tables = Array();


        foreach($response as $line){

            list($class, $grade) = $line;

            $tableformat = <<<EOD
            <tr>
            <td>$class</td>
            <td>$grade</td>
            </tr>
            EOD;

            $tableView = sprintf($tableformat, $grade, $class);
            array_push($tables, $tableView);
	    }
        $tableView = implode(" ", $tables);
        $timeStamp = date('l jS \of F Y \a\t H:i:s');

	$HTMLCODE = <<<EOD
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
	EOD;
	return $HTMLCODE;
    }

    function listClassInformation($CLASS){
        $format = <<<'EOD'
        select title, section, seats, classroom, meeting_days, beginning_time, ending_time from (
            select *
            from course where number_=%d
        ) coursesPull
        join (
            select * from section
        ) data where data.number_=coursesPull.section
        EOD;
        $query = sprintf($format, $CLASS);
        return $this->extractor->query($query);
    }
};
?>
