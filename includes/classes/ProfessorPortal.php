<?php


date_default_timezone_set("America/Los_Angeles"); 

class ProfessorPortal {
    function __construct($xtractor) {
        $this->extractor = $xtractor;
    }

    function listCourses(){
        $format = "select grade, count(*) from record group by grade;";
        $output = $this->extractor->query($format);

        $letter_grades = Array("<tr>\n");
        $amount = Array("<tr>\n");

        foreach($output as $value){
            list($a, $b) = $value;
            array_push($letter_grades, "\t<th>" . $a . "</th>\n");
            array_push($amount, "\t<th>" . $b . "</th>\n");
        }
        array_push($letter_grades, "</tr>\n");
        array_push($amount, "</tr>\n");
        $letter_grades = implode(" ", $letter_grades);
        $amount = implode(" ", $amount);
        $timeStamp = date('l jS \of F Y \a\t H:i:s');

        $format = <<<EOD
	<center>
	<h1>Grades Report</h1>
	<table>
	$letter_grades
	$amount
	</table>
	Generated on: $timeStamp
	</center>
	EOD;
        return $format;
    }
};
?>
