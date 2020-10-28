#!/usr/bin/env python3.8

"""
Test the database in memory to see if SQL code works
Much faster than testing on the server
"""

import sqlite3
import random

class Student():
    def __init__(self, cwid, fname, lname, address, telephone):
        self.cwid = cwid
        self.fname = fname
        self.lname = lname
        self.address = address
        self.telephone = telephone

    def toSQL(self):
        keys = list(self.__dict__.keys())
        values = list(self.__dict__.values())
        values = ["\"{}\"".format(element) for element in values]
        return "INSERT INTO student({}) VALUES({});".format(', '.join(keys), ', '.join(values))

def testSytax():
    connection = sqlite3.connect(":memory:")
    cursor = connection.cursor()

    # Create the database and insert values
    with open("../sql_files/create-database.sql", "r") as fp:
        sql_as_string = fp.read()

    cursor.executescript(sql_as_string)

    for row in cursor.execute("SELECT name, chairperson FROM department"):
        name, chair = row
        print(f'Department: {name}\nChairperson: {chair}\n\n')

def generateStudent():
    fnames = [
        "Jared",
        "Kevin",
        "Casey",
        "William",
        "Ken"
    ]

    lnames = [
        "Dyreson",
        "Ramirez",
        "Smith",
        "McCarthy",
        "Ortega"
    ]

    container = []
    for _ in range(0, 11):
        container.append(str(random.randint(0, 9)))
    cwid = ''.join(container)
    fname = random.choice(fnames)
    lname = random.choice(lnames)
    addy = "123 Main Street"
    random.shuffle(container)
    container = [str(element) for element in container]
    area, body = ''.join(container[0:3]), ''.join(container[4:])
    telephone = f'{area}-{body}'
    return Student(cwid, fname, lname, addy, telephone)

# for _ in range(0, 7):
    # print(generateStudent().toSQL())

testSytax()
