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

-- Departments

-- Computer Science
insert into department(name, number_, location, telephone) values ("Computer Science", "1", "West Nutmeg Building", "909-896-2753");

-- Engineering 
insert into department(name, number_, location, telephone) values ("Engineering", "2", "North Copperston Building", "909-896-7878");

-- Mathematics 
insert into department(name, number_, location, telephone) values ("Mathematics", "3", "Junior Hall", "909-896-8512");
