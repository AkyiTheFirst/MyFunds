Info for creating database

Database Name = "myfunds"

Create balance table using this code ==>

<code>
create TABLE balance (
	id INT NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
  status VARCHAR(1) NOT NULL,
  description VARCHAR(50) NOT NULL,
  amount INT NOT NULL,
  account VARCHAR(10) NOT NULL,
  `date` DATE
);
</code>

Create user table using this code ==>

<code>
CREATE TABLE user (
	userid INT NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
	email VARCHAR(50),
	username VARCHAR(50),
	PASSWORD VARCHAR(50)
);
</code>
