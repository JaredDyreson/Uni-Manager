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
	firstN varchar(255) NOT NULL,	-- first name
	lastN varchar(255) NOT NULL, 	-- last name
	cwid int(9) NOT NULL,			-- campus wide ID
	address varchar(512) NOT NULL,	-- full address
	telephone varchar(25),			-- telephone number
	PRIMARY KEY(cwid)				-- Campus Wide ID is primary key
);

-- Department Table
CREATE TABLE department (
	name varchar(255) NOT NULL,		-- name
	number_ int(25) NOT NULL,		-- number
	location varchar(512) NOT NULL,	-- office location
	telephone varchar(25),			-- telephone number
	PRIMARY KEY(number_)			-- number is primary key
);
