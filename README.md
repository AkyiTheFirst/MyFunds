Info for creating database

Database Name = "myfunds"

Create a table using this code ==>

<code>
create TABLE bb (
	id INT NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
  status VARCHAR(1) NOT NULL,
  description VARCHAR(50) NOT NULL,
  amount INT NOT NULL,
  account VARCHAR(10) NOT NULL,
  `date` DATE
);
</code>
