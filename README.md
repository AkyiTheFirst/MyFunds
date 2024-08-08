Now Supports Making New Accounts and Connecting to Different Data using user id.

Info for creating database

Create a balance table using this code ==>

<code>
create TABLE balance (
	id INT NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
	status VARCHAR(1) NOT NULL,
	description VARCHAR(50) NOT NULL,
	amount INT NOT NULL,
	account VARCHAR(10) NOT NULL,
	`date` DATE,
	userid INT KEY
);
</code>

Create a user table using this code ==>

<code>
CREATE TABLE USER (
	userid INT NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(50),
	email VARCHAR(50),
	PASSWORD VARCHAR(50)
);
</code>
