CREATE DATABASE aptech_php_22_08;

CREATE TABLE aptech_php_22_08.users(
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE
);
INSERT INTO aptech_php_22_08.users(name, email) 
VALUES ('mai', 'mai@gmail.com'),('mai', 'mai@gmail.com'),
('mai', 'mai@gmail.com');

SELECT * FROM aptech_php_22_08.users; 