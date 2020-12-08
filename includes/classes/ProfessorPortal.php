<?php

class ProfessorPortal {
    function __construct($xtractor) {
        $this->extractor = $xtractor;
    }

    function listCourses($courseID){
        $format = "select grade, count(*) from record where course_id=%d group by grade;";
        $Q = sprintf($format, $courseID);
        $output = $this->extractor->query($Q);



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

        $format = <<<EOD
        <html>
        <head>
            <link rel="stylesheet" href="../styles.css"></link>
        </head>
        <body>

        <center>
        <table>
        $letter_grades
        $amount
        </table>
        </center>

        </body>
        </html> 
        EOD;
        return $format;
    }
};
?>
