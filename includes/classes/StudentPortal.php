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
        $query = sprintf($format, $CWID);
        return $this->extractor->query($query);
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
