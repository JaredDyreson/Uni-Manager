<?php


date_default_timezone_set("America/Los_Angeles"); 

class ProfessorPortal {
    function __construct($xtractor) {
        $this->extractor = $xtractor;
    }

    function listCourses($courseNumber, $courseID){
        $format = <<<EOD
        select record_.grade, count(record_.grade) from (
            select * from record where course_id=$courseID
        ) record_
        join (
            select * from course where number_=$courseNumber
        ) course_ where course_.section=record_.course_id;
        EOD;

        $output = $this->extractor->query($format);
        $tables = Array();

        foreach($output as $value){
            list($grade, $gradeCount) = $value;

            $tableformat = <<<EOD
            <tr>
            <td>$grade</td>
            <td>$gradeCount</td>
            </tr>
            EOD;

            array_push($tables, $tableformat);
        }
        $tables = implode(" ", $tables);
        $timeStamp = date('l jS \of F Y \a\t H:i:s');

	$format = <<<EOD
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
	EOD;

        return $format;
    }
};
?>
