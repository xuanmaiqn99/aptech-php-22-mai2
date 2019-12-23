-- FOREIGN KEY --
-- EXERCISE 1 : Create table Role describe role of user in database and add some values.

-- SUGGESTION :
/* CREATE TABLE aptech_php.apRole
(
    rId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    rTitle varchar(255) NOT NULL UNIQUE,
    rState int DEFAULT 1
);
INSERT INTO aptech_php.apRole (rTitle)
VALUES ('Administrator'),('Copywriter');
 */
CREATE TABLE mai_my_project.role(
rid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255)
);
INSERT INTO mai_my_project.role (rid, name)
VALUES (1,"Mai"), (2, "Lan");

-- EXERCISE 2 : 
/* 
Change column Email in User table to NOT NULL UNIQUE.
Set column Role in User table default to 2.
Set column State in User table default to 1.
Set colum uCreatedDate default is moment create data. 
Add FOREIGN KEY Role to Role table. 
Then add some new values, no need to insert into columns have default value.  
*/
-- SUGGESTION :
/* ALTER TABLE aptech_php.apUser
MODIFY COLUMN uEmail varchar(255) NOT NULL UNIQUE;
ALTER TABLE aptech_php.apUser
MODIFY COLUMN uState int DEFAULT 1, 
MODIFY COLUMN uRole int DEFAULT 2;
ALTER TABLE aptech_php.apUser
MODIFY COLUMN uCreatedDate datetime DEFAULT NOW();
ALTER TABLE aptech_php.apUser
ADD FOREIGN KEY (uRole) REFERENCES aptech_php.apRole(rId); 
INSERT INTO aptech_php.apUser (uLastName,uFirstName,uEmail)
VALUES ('Ford','Henry','henry.ford@gmail.com');
*/
ALTER TABLE mai_my_project.table
MODIFY COLUMN email VARCHAR(255) NOT NULL UNIQUE;
ALTER TABLE mai_my_project.table 
MODIFY COLUMN id int DEFAULT 2, 
MODIFY COLUMN dob datetime DEFAULT NOW();
ALTER TABLE mai_my_project.table
ADD FOREIGN KEY (id) REFERENCES mai_my_project.role(rId); 
INSERT INTO mai_my_project.table (email)
VALUES ('henry.ford@gmail.com');

