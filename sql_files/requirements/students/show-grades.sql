select title, subPull.grade from (
    select * from record where student_cwid=889546521
) subPull
join (
    select section, title
    from course
) subCourse where subCourse.section=subPull.course_id group by title;
