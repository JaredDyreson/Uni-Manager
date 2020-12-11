select course_.title, course_.number_, record_.grade from (
    select * from record where course_id=26038
) record_
join (
    select * from course where number_=315
) course_ where course_.section=record_.course_id;
