select title, section, seats, classroom, meeting_days, beginning_time, ending_time from (
    select *
    from course where number_=338
) coursesPull
join (
    select * from section
) data where data.number_=coursesPull.section
