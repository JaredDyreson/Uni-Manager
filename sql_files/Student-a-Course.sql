select course_.section, section_.classroom, section_.seats, section_.meeting_days, section_.beginning_time, section_.ending_time from (
    select *
    from course where number_=332
) course_
join (
    select *
    from section
) section_ where course_.section=section_.number_;

select title from course where number_=315;
