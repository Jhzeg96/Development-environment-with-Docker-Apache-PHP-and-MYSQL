# Development environment with Docker, Apache, PHP and MYSQL

This is a project where i build a simple authentication system using Apache as the HTTP server, PHP as the programming language, MYSQL as the database and Docker for packaging the entire dependencies.

## Installation

Use the docker-compose file to run the container and leave it running in background

```bash
docker-compose up -d
```

## Usage

When running the docker container it creates two directories in the project root folder, one for the mysql database and one for the website files. The directories are named "mysql" and "www", in the "www" folder you can put your html and php files and in the mysql directory is where the databases are saved.

## Contributing
Pull requests are welcome. 

## Important
This project should not be used in production but it could be a  good starting point for develop more advanced features.

