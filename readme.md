# Create a database and table with name user bu running the below mentioned commands.

CREATE DATABASE users;

USE users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);



# Create a user with name user and give him all the permision and save the changes by running the below given commands.

CREATE USER 'user'@'%' IDENTIFIED BY 'Admin@123';

GRANT ALL PRIVILEGES ON *.* TO 'user'@'%' WITH GRANT OPTION;

FLUSH PRIVILEGES;
