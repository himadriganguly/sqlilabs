<?php

//including the Mysql connect parameters.
include_once ("db-creds.inc");

$mysqli = new mysqli($host,$db_username,$db_password);
if ($mysqli->connect_errno) {
	echo die('[*]...................Could not connect to DB, check the creds in db-creds.inc: ' . $mysqli->connect_error);
	exit();
}

//purging Old Database
$query = "DROP DATABASE IF EXISTS sqlilabs";
if ($mysqli->query($query)) {echo "[*]...................Old database 'SQLILABS' purged if exists";
	echo "<br><br>\n";
} else {echo "[*]...................Error purging database: " . $mysqli->error;
	echo "<br><br>\n";
}

//Creating new database security
$query = "CREATE database `sqlilabs`";
if ($mysqli->query($query)) {echo "[*]...................Creating New database 'SQLILABS' successfully";
	echo "<br><br>\n";
} else {echo "[*]...................Error creating database: " . $mysqli->error;
	echo "<br><br>\n";
}

//creating table users
$query = "CREATE TABLE sqlilabs.users 
		(
		id int(3) NOT NULL AUTO_INCREMENT, 
		username VARCHAR(20) NOT NULL, 
		password VARCHAR(20) NOT NULL,
		PRIMARY KEY (id)
		)";
if ($mysqli->query($query)) {echo "[*]...................Creating New Table 'USERS' successfully";
	echo "<br><br>\n";
} else {echo "[*]...................Error creating Table: " . $mysqli->error;
	echo "<br><br>\n";
}

//creating table user_info
$query = "CREATE TABLE sqlilabs.user_info 
		(
		id INT(3) NOT NULL AUTO_INCREMENT,
		user_id INT(3) NOT NULL,
		first_name CHAR(20) NOT NULL,
		last_name CHAR(20) NOT NULL,
		address VARCHAR(50) NOT NULL,  
		email_id VARCHAR(30) NOT NULL,
		creditcard_number VARCHAR(25) NOT NULL,
		ccv_number INT(3) NOT NULL,		 
		PRIMARY KEY (id),
		FOREIGN KEY (user_id) REFERENCES sqlilabs.users(id)
		)";
if ($mysqli->query($query)) {echo "[*]...................Creating New Table 'USER INFO' successfully";
	echo "<br><br>\n";
} else {echo "[*]...................Error creating Table: " . $mysqli->error;
	echo "<br><br>\n";
}

//creating table user_login_info
$query = "CREATE TABLE sqlilabs.user_login_info 
		(
		id INT(3) NOT NULL AUTO_INCREMENT,
		user_id INT(3) NOT NULL,
		ip_address varchar(35) NOT NULL,
		last_login TIMESTAMP NOT NULL,
		PRIMARY KEY (id),
		FOREIGN KEY (user_id) REFERENCES sqlilabs.users(id)
		)";
if ($mysqli->query($query)) {echo "[*]...................Creating New Table 'USER LOGIN INFO' successfully";
	echo "<br><br>\n";
} else {echo "[*]...................Error creating Table: " . $mysqli->error;
	echo "<br><br>\n";
}

//inserting data into users
$query = "INSERT INTO sqlilabs.users (id, username, password) VALUES ('1', 'john', 'somesecrect'), ('2', 'angelina', 'I-kill-you'), ('3', 'admin', 'p@ssword'), ('4', 'secure', 'crappy'), ('5', 'stupid', 'stupidity'), ('6', 'superman', 'genious'), ('7', 'batman', 'mob!le'), ('8', 'admin', 'admin'), ('9', 'admin1', 'admin1'), ('10', 'admin2', 'admin2'), ('11', 'admin3', 'admin3'), ('12', 'clevin', 'anything'), ('13', 'admin4', 'admin4'), ('14', 'dbadmin', 'verysecret')";
if ($mysqli->query($query)) {echo "[*]...................Inserted data correctly into table 'USERS'";
	echo "<br><br>\n";
} else {echo "[*]...................Error inserting data: " . $mysqli->error;
	echo "<br><br>\n";
}

//inserting data into user_info
$query = "INSERT INTO sqlilabs.user_info (id, user_id, first_name, last_name, address, email_id, creditcard_number, ccv_number) VALUES ('1', '1', 'John', 'Doe', '111 First St Apt 1 First City NY 11111', 'john@localhost.com', '4111-1111-1111-1111', '123'), ('2', '2', 'Angelina', 'Jolie', '234 Some St Second City NY 88888', 'angelina@localhost.com', '5500-0000-0000-0004', '456'), ('3', '3', 'John', 'Smith', '333 First St Apt 2 First City NY 66666', 'smith@localhost.com', '3400-0000-0000-009', '789'), ('4', '4', 'David', 'Brown', 'Some Address', 'david@localhost.com', '3000-0000-0000-04 ', '101'), ('5', '5', 'Gary', 'Scotland', '234 Some St Second City AZ 88888', 'gary@localhost.com', '6011-0000-0000-0004', '112'), ('6', '6', 'Superman', 'Hero', 'Secret Address', 'super@localhost.com', '2014-0000-0000-009', '121'), ('7', '7', 'Anthony', 'Daniel', '234 Second St Second City LA 99999', 'anthony@localhost.com', '3088-0000-0000-0009', '131'), ('8', '8', 'Jacob', 'Ethan', '434 Third St Second City CF 55555', 'jacob@localhost.com', '3099-0000-0000-0009', '142'), ('9', '9', 'Alexander', 'Jacob', '455 Third St Second City CF 55555', 'alex@localhost.com', '3022-0000-0000-0009', '189'), ('10', '10', 'Michael', 'Ryan', '434 Third St Second City CF 55555', 'michael@localhost.com', '3066-0000-0000-0009', '142'), ('11', '11', 'William', 'Alexander', '434 Third St Second City CF 55555', 'william@localhost.com', '3011-0000-0000-0009', '256'), ('12', '12', 'Joshua', 'Ryan', '434 Third St Second City CF 55555', 'joshua@localhost.com', '3077-0000-0000-0009', '389'), ('13', '13', 'Noah', 'Smith', '434 Third St Second City CF 55555', 'noah@localhost.com', '3055-0000-0000-0009', '478'), ('14', '14', 'Carter', 'Jackson', '434 Third St Second City CF 55555', 'carter@localhost.com', '3099-0000-0000-0009', '546')";
if ($mysqli->query($query)) {echo "[*]...................Inserted data correctly into table 'USERS INFO'";
	echo "<br><br>\n";
} else {echo "[*]...................Error inserting data: " . $mysqli->error;
	echo "<br><br>\n";
}


//inserting data into user_login_info
$query = "INSERT INTO sqlilabs.user_login_info (id, user_id, ip_address, last_login) VALUES ('1', '1', '192.168.1.2', '2015-12-01 20:37:22'), ('2', '2', '192.168.1.3', '2015-12-22 20:37:22'), ('3', '3', '192.168.1.4', '2015-12-08 20:37:22'), ('4', '4', '192.168.1.5', '2015-12-09 20:37:22'), ('5', '5', '192.168.1.6', '2015-12-14 20:37:22'), ('6', '6', '192.168.1.7', '2015-11-20 20:37:22'), ('7', '7', '192.168.1.8', '2015-10-10 20:37:22'), ('8', '8', '192.168.1.9', '2015-06-13 20:37:22'), ('9', '9', '192.168.1.10', '2015-02-12 20:37:22'), ('10', '10', '192.168.1.11', '2015-08-09 20:37:22'), ('11', '11', '192.168.1.12', '2015-12-01 20:37:22'), ('12', '12', '192.168.1.20', '2015-01-01 20:37:22'), ('13', '13', '192.168.1.45', '2015-12-01 20:37:22'), ('14', '14', '192.168.1.150', '2015-07-01 20:37:22')";
if ($mysqli->query($query)) {echo "[*]...................Inserted data correctly into table 'USERS'";
	echo "<br><br>\n";
} else {echo "[*]...................Error inserting data: " . $mysqli->error;
	echo "<br><br>\n";
}

?>
