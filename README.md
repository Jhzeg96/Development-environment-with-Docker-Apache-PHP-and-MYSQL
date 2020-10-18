# Development environment with Docker, Apache, PHP and MYSQL

This is a project where i build a simple authentication system using Apache as the HTTP server, PHP as the programming language, MYSQL as the database and Docker for packaging the entire dependencies.

## Installation

Use the docker-compose file to run the containers and leave them running in background

```bash
docker-compose up -d
```
Enter to mysql from the terminal
```bash
mysql -h localhost -P 3311 --protocol=tcp -u admin --password
```
Create the database
```bash
CREATE DATABASE test;
```
Create the table
```bash
CREATE TABLE `users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
```
Note: the database credentials are hardcoded in the docker-compose.yml file (Not a good practice)

## Usage

When running the docker container it creates two directories in the project root folder, one for the mysql database and one for the website files. The directories are named "mysql" and "www", in the "www" folder you can put your html and php files and in the mysql directory is where the databases are saved.

## Contributing
Pull requests are welcome. 

## Important
This project should not be used in production but it could be a  good starting point for develop more advanced features.
