CREATE TABLE professor (
    ssn int(9) NOT NULL,
    name varchar(255) NOT NULL,
    address varchar(512) NOT NULL,
    telephone varchar(25),
    city varchar(255),
    state varchar(2),
    zipcode int(5),
    PRIMARY KEY(ssn)
);

CREATE TABLE department (
    identifier int(100) NOT NULL,
    name varchar(255) NOT NULL,
    telephone varchar(25) NOT NULL,
    location varchar(512) NOT NULL,
    chairperson varchar(512) NOT NULL, -- Is professor
    PRIMARY KEY(identifier)
);

CREATE TABLE course (
    teacher int(9) NOT NULL,
    identifier int(100) NOT NULL,
    title varchar(255) NOT NULL,
    textbook varchar(255) NOT NULL,
    units int(10) NOT NULL,
    supplier varchar(255) NOT NULL, -- the department
    -- Not sure how to make a list of pre-reqs for SQL specifically
    PRIMARY KEY(identifier)
);

CREATE TABLE section (
    -- Below should proably be a foreign key because it refers to above?
    teacher int(9) NOT NULL,
    basecourse int(100) NOT NULL,
    identifier int(5) NOT NULL,
    classroom varchar(100),
    available_seats int(100),
    meeting_days date,
    start_time timestamp,
    end_time timestamp,
    
    FOREIGN KEY (basecourse) REFERENCES course(identifier)
    -- FOREIGN KEY (basecourse) REFERENCES course(identifier)
);

CREATE TABLE student (
    cwid int(50) NOT NULL,
    fname varchar(100) NOT NULL,
    lname varchar(100) NOT NULL,
    address varchar(512) NOT NULL,
    telephone varchar(25) NOT NULL,
    -- Major needs to refer to a 

    PRIMARY KEY(cwid)
);



-- 3 Professors

-- INSERT INTO professor(ssn, name, address, telephone, city, state, zipcode) VALUES (123456789, "Joe Biden", "123 First Street", "123-456-7891", "Fullerton", "CA", 92831);
-- INSERT INTO professor(ssn, name, address, telephone, city, state, zipcode) VALUES (987654321, "Donald Trump", "1600 Pennsylvania Ave.", "903-213-1213" ,"NW Washington, DC", "DC",20500);
-- INSERT INTO professor(ssn, name, address, telephone, city, state, zipcode) VALUES (234211423, "Joe Rogan", "345 Second Avenue", "213-132-1231", "Austin", "Texas",73301);

-- 2 Departments

-- INSERT INTO department(identifier, name, telephone, location, chairperson) VALUES (12112, "Computer Science", "657-278-3700", "Department of Computer Science (CS-522) California State University, Fullerton 800 N. State College Blvd. Fullerton, CA 92834", "Joe Rogan");
-- INSERT INTO department(identifier, name, telephone, location, chairperson) VALUES (21314, "English", "657-278-3163", "California State University, Fullerton Gordon Hall 322 Fullerton, California 92831" , "Joe Biden");

-- 4 Courses (2 English, 2 CS)

-- INSERT INTO course(teacher, identifier, title, textbook, units, supplier) VALUES (1234567891, 123456, "CS-131 : Introduction to Datastructures", "Data Structures and Algorithms in C++", 4, "Computer Science");
-- INSERT INTO course(teacher, identifier, title, textbook, units, supplier) VALUES (1234567891, 12345, "CS-120 : Introduction to C++", "C++ For Beginners", 4, "Computer Science");




-- INSERT INTO course(teacher, identifier, title, textbook, units, supplier) VALUES (1234567891, 123456, "CS-131 : Introduction to Datastructures", "Data Structures and Algorithms in C++", 4, "Computer Science");
-- INSERT INTO course(identifier, title, textbook, units, supplier) VALUES (324224, "CS-121 : Introduction to OOP", "Classes and Structures in C++", 3, "Computer Science");
-- INSERT INTO course(identifier, title, textbook, units, supplier) VALUES (211314, "ENG-100 : Reading and Writing", "How to Formulate an Argument", 3, "English");
-- INSERT INTO course(identifier, title, textbook, units, supplier) VALUES (213411, "ENG-123 : Shakespearean Literature", "Hamlet", 3, "English");

-- One course
-- INSERT INTO section(teacher, basecourse, identifier, classroom, available_seats, meeting_days, start_time, end_time) VALUES (1234567891, 123456, 6969, "ECS 101", 0, '29-JUN-04', '2008-01-01 00:00:01', '2008-01-01 00:00:01');

-- INSERT INTO section(teacher, basecourse, identifier, classroom, available_seats, meeting_days, start_time, end_time) VALUES (1234567891, 12345, 6868, "ECS 101", 0, '29-JUN-04', '2008-01-01 00:00:01', '2008-01-01 00:00:01');

    -- teacher int(9) NOT NULL,
    -- basecourse int(100) NOT NULL,
    -- identifier int(5) NOT NULL,
    -- classroom varchar(100),
    -- available_seats int(100),
    -- meeting_days date,
    -- start_time timestamp,
    -- end_time timestamp,
-- Randomly generated students based on Python script

INSERT INTO student(cwid, fname, lname, address, telephone) VALUES(53969038656, "William", "Dyreson", "123 Main Street", "935-0665368");
INSERT INTO student(cwid, fname, lname, address, telephone) VALUES(71481021819, "Casey", "Ramirez", "123 Main Street", "142-1701891");
INSERT INTO student(cwid, fname, lname, address, telephone) VALUES(65151776649, "Casey", "McCarthy", "123 Main Street", "754-5691761");
INSERT INTO student(cwid, fname, lname, address, telephone) VALUES(36590004440, "Ken", "McCarthy", "123 Main Street", "644-0400905");
INSERT INTO student(cwid, fname, lname, address, telephone) VALUES(98207081500, "Jared", "Ramirez", "123 Main Street", "128-7009850");
INSERT INTO student(cwid, fname, lname, address, telephone) VALUES(65628213994, "Casey", "Smith", "123 Main Street", "422-1569836");
INSERT INTO student(cwid, fname, lname, address, telephone) VALUES(18954666233, "William", "McCarthy", "123 Main Street", "926-3146835");


-- Randomly generated student records based on Python script
