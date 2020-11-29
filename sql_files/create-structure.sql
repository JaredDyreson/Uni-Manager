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
