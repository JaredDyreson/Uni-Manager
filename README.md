# Uni-Manager

A university management application using SQL and PHP.

All Python code that accidentally got pushed to main should be ignored.

# Steps

## Login to the Server

```bash
ssh cs332f11@shell.ecs.fullerton.edu
# password is: Moadel0k
```

## Run MariaDB from Terminal

```bash
mysql -h mariadb -u cs332f11 -p
```

## Insert something

You can navigate to `homepage/sql` and run the following:

```
USE cs332f11;
SOURCE create-database.sql;
SOURCE query.sql;
SOURCE delete-database.sql;
```

## Getting things from the server via SCP

```bash
scp cs332f11@shell.ecs.fullerton.edu:/home/titan0/cs332f/cs332f11/homepage/ .
# just specify the file path inside homepage
```

## Web browser navigation

- [Link](http://ecs.fullerton.edu/~cs332f11/)
