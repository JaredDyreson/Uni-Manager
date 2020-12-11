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
        $queryFormatLarge = <<<'EOD'
        select course_.section, section_.classroom, section_.seats, section_.meeting_days, section_.beginning_time, section_.ending_time from (
            select *
            from course where number_=%d
        ) course_
        join (
            select *
            from section
        ) section_ where course_.section=section_.number_;
        EOD;
        $query = sprintf($queryFormatLarge, $CLASS);
        $result =  $this->extractor->query($query);

        $titleQuery = "select title from course where number_=%d;";
        $titleQuery = sprintf($titleQuery, $CLASS);
        $titleResult =  $this->extractor->query($titleQuery)[0][0];
        echo "$titleResult\n";
        print_r($result);
        

        $timeStamp = date('l jS \of F Y \a\t H:i:s');

	$HTMLCODE = <<<EOD
	<center>
	<h1>Section Report for $titleResult</h1>
	Generated on: $timeStamp
	</center>
	EOD;
	return $HTMLCODE;
    }
};
?>
