-- Professors

-- Jared Dyreson
insert into professor(address, name, sex, salary, position, degrees, ssn, telephone) values ("800 N State College Blvd, Fullerton, CA 92831", "Jared Dyreson", "M", 45000, "Professor of Computer Science", "Computer Science, Computer Engineering", 123456781, "714-681-6917");

-- Katherine Correra
insert into professor(address, name, sex, salary, position, degrees, ssn, telephone) values ("800 N State College Blvd, Fullerton, CA 92831", "Katherine Correra", "F", 55000, "Professor of Computer Science", "Computer Science, English", 123456782, "714-681-6918");

-- Kevin Duarte
insert into professor(address, name, sex, salary, position, degrees, ssn, telephone) values ("800 N State College Blvd, Fullerton, CA 92831", "Kevin Duarte", "M", 90000, "Professor of Computer Science", "Computer Science, Mechanical Engineering", 123456783, "714-681-6919");


-- Students

-- Kevin Duarte
insert into student(firstN, lastN, cwid, address, telephone) values ("Kevin", "Duarte", 888888888, "800 N State College Blvd, Fullerton, CA 92831", "714-681-6919");

-- Katherine Correra
insert into student(firstN, lastN, cwid, address, telephone) values ("Katherine", "Correra", 888888887, "800 N State College Blvd, Fullerton, CA 92831", "714-681-6918");

-- Jared Dyreson
insert into student(firstN, lastN, cwid, address, telephone) values ("Jared", "Dyreson", 888888886, "800 N State College Blvd, Fullerton, CA 92831", "714-681-6917");

-- John Wick
insert into student(firstN, lastN, cwid, address, telephone) values ("John", "Wick", 888888885, "800 N State College Blvd, Fullerton, CA 92831", "714-681-6916");

-- Mario Tumble
insert into student(firstN, lastN, cwid, address, telephone) values ("Mario", "Tumble", 888888884, "800 N State College Blvd, Fullerton, CA 92831", "714-681-6915");

-- Roger Bat
insert into student(firstN, lastN, cwid, address, telephone) values ("Roger", "Bat", 888888883, "800 N State College Blvd, Fullerton, CA 92831", "714-681-6914");

-- Simon Says
insert into student(firstN, lastN, cwid, address, telephone) values ("Simon", "Says", 888888882, "800 N State College Blvd, Fullerton, CA 92831", "714-681-6913");

-- Drake Bell
insert into student(firstN, lastN, cwid, address, telephone) values ("Drake", "Bell", 888888881, "800 N State College Blvd, Fullerton, CA 92831", "714-681-6912");



-- Departments

-- Computer Science
insert into department(name, number_, location, telephone) values ("Computer Science", "1", "West Nutmeg Building", "909-896-2753");

-- Engineering 
insert into department(name, number_, location, telephone) values ("Engineering", "2", "North Copperston Building", "909-896-7878");


-- Sections

-- CPSC 101
insert into section(number_, classroom, seats, meetingdays, beginningtime, endingtime) values (101, "Room 12B - West Nutmeg Building", 30, "Monday, Wednesday", "8:00AM", "10:00AM");

-- CPSC 150
insert into section(number_, classroom, seats, meetingdays, beginningtime, endingtime) values (150, "Room 14 - West Nutmeg Building", 30, "Thursday", "9:00AM", "11:00AM");

-- CPSC 200
insert into section(number_, classroom, seats, meetingdays, beginningtime, endingtime) values (200, "Room 13B - West Nutmeg Building", 20, "Monday, Wednesday", "8:00AM", "10:00AM");

-- CPSC 250
insert into section(number_, classroom, seats, meetingdays, beginningtime, endingtime) values (250, "Room 5 - West Nutmeg Building", 40, "Saturday", "1:00PM", "2:00PM");

-- Engineering 111
insert into section(number_, classroom, seats, meetingdays, beginningtime, endingtime) values (111, "Room 6 - North Copperston Building", 30, "Monday, Wednesday", "8:00AM", "10:00AM");

-- Engineering 112
insert into section(number_, classroom, seats, meetingdays, beginningtime, endingtime) values (112, "Room 40 - North Copperston Building", 20, "Friday", "10:00AM", "11:00AM");

-- Engineering 172
insert into section(number_, classroom, seats, meetingdays, beginningtime, endingtime) values (172, "Room 15 - North Copperston Building", 30, "Wednesday, Thursday", "8:00AM", "10:00AM");

-- Engineering 220
insert into section(number_, classroom, seats, meetingdays, beginningtime, endingtime) values (220, "Room 16 - North Copperston Building", 40, "Monday, Wednesday, Thursday", "9:00AM", "10:00AM");