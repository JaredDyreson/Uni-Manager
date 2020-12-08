CREATE TABLE course(
	number int(5) NOT NULL,
	title varchar(255) NOT NULL,
	units int(1) NOT NULL,
	prerequisites varchar(255) NOT NULL,
	textbook varchar(255) NOT NULL,
	sections varchar(255) NOT NULL,
	PRIMARY KEY(number)
);

INSERT INTO course(number, title, units, prerequisites, textbook, sections) VALUES(315, "Prof Ethics in Computing", 3, "CPSC 311", "Ethics for the Information Age", "26038");
INSERT INTO course(number, title, units, prerequisites, textbook, sections) VALUES(349, "Web Front-End Engineering", 3, "CPSC 131", "Front-End Web Development", "25619");
INSERT INTO course(number, title, units, prerequisites, textbook, sections) VALUES(332, "File Structure & Database", 3, "CPSC 131", "Fundamentals of Database Systems", "32886, 25620");
INSERT INTO course(number, title, units, prerequisites, textbook, sections) VALUES(338, "Stat Appl to Natural Sci", 4, "MATH 130", "OpenIntro Statistics", "31748, 31749");
