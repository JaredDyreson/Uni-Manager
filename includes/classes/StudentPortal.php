<?php
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

        $letter_grades = Array("<tr>\n");
        $class = Array("<tr>\n");

        $query = sprintf($format, $CWID);
        $response = $this->extractor->query($query);

        foreach($response as $line){
            list($a, $b) = $line;
            array_push($letter_grades, "\t<th>" . $a . "</th>\n");
            array_push($class, "\t<th>" . $b . "</th>\n");
        }
        $letter_grades = implode(" ", $letter_grades);
        $class = implode(" ", $class);

        $timeStamp = date('l jS \of F Y \a\t H:i:s');

        $HTMLCODE = <<<EOD
        <center>
        <h1>Grades Report -- Transcript</h1>
        <table>
        $letter_grades
        $class
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
