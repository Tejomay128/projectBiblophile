/*created a database named user_info, and then created three tables in it, one holding
  user data, one for cart, and one for reading challenge*/

CREATE TABLE userdata (
	username VARCHAR(50) PRIMARY KEY,
	name VARCHAR(100),
    email VARCHAR(150),
    country_code VARCHAR(10),
    phone_no VARCHAR(11),
    passwd VARCHAR(100)
);

CREATE TABLE usercart ( 
	username VARCHAR(50),
	book_id VARCHAR(50),
	PRIMARY KEY(email,book_id)
	); 

CREATE TABLE userchallenge (
	username VARCHAR(50),
	days UNSIGNED INT,
	books UNSIGNED INT,
	pages UNSIGNED INT,
	genre VARCHAR(100)
	);
