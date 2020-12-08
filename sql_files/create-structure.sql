-- Professor Table

CREATE TABLE professor (
    address varchar(512) NOT NULL, -- full : [address [800 N State College Blvd], ciy [Fullerton], state [CA] zip [92831]]
    name varchar(255) NOT NULL,
    sex varchar(1) NOT NULL,
    salary int(10) NOT NULL,
    position varchar(255) NOT NULL,
    degrees varchar(512) NOT NULL,
    ssn int(9) NOT NULL,
    telephone varchar(25),
    PRIMARY KEY(ssn)
);

-- Student Table

CREATE TABLE student (
    fullName varchar(512), -- fullname, which is processed externally
	cwid int(9) NOT NULL,			-- campus wide ID
	address varchar(512) NOT NULL,	-- full address
	telephone varchar(25),			-- telephone number
    sections varchar(255),          -- currently enrolled courses
	PRIMARY KEY(cwid)				-- Campus Wide ID is primary key
);

-- Department Table

CREATE TABLE department (
	name varchar(255) NOT NULL,		-- name
	number_ int(25) NOT NULL,		-- number
	location varchar(512) NOT NULL,	-- office location
	telephone varchar(25),			-- telephone number
    chairperson varchar(512) NOT NULL, -- chairperson
	PRIMARY KEY(number_)			-- number is primary key
);


-- Course Table

CREATE TABLE course (
	number_ int(5) NOT NULL,
	title varchar(225) NOT NULL,
	units int(1) NOT NULL,
	prerequisites varchar(255) NOT NULL,
	textbook varchar(255) NOT NULL,
	-- sections varchar(255) NOT NULL,
    section int(5) not null,
	PRIMARY KEY(section)
);

-- Section Table

CREATE TABLE section (
	number_ int(5) NOT NULL,
    classroom varchar(255) NOT NULL,
    seats int(255) NOT NULL,
    meeting_days varchar(255) NOT NULL,
    beginning_time varchar(255) NOT NULL,
    ending_time varchar(255) NOT NULL,
    professor int(9) not null,
    PRIMARY KEY(number_)
);

-- Record Table

CREATE TABLE record (
    student_cwid int(9) not null,
    course_id int(5) not null,
    grade varchar(3) not null
);
