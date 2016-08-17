#MySQL
======

	- Database
      ========
		- Set of tables
		- 1 database = 1 application
		- example: widget_corp
		- access permissions are granted at database level

	- Table
      =====
		- Set of columns and rows
		- represents a single concept (a noun)
		- examples: products, customers, orders

	- Column
      ======
		- Set of data of a single simple type
		- examples: first_name, last_name, email, password
		- columns have types: strings, integers, etc

	- Rows
      ====
		- Single record of data
		- example: "Kevin", "Douglas", "kevdog@gmail.com", "secret"

	- Field
      =====
		- Intersection of a column and a row
		- Example: first_name: "Kevin"


	- Index
	  =====
	  	- Data structure on a table to increase look up speed
	  	- Like the index at the back of a book

	- Foreign key
	  ===========
	  	- Table column whose values reference rows in another table
	  	- The foundation of relational databases


	- CRUD
	  ====
	  	- Acronym that stands for the four most basic operations that we do with databases

	  			- Create 	=> create new rows in our database tables
	  			- Read 		=> read back data
	  			- Update	=> update data
	  			- Delete	=> delete data




# Creating a Database
=====================
	- i'm accessing mysql in windows using wamp - and running mysql console/ terminal
	- exit => logs u out, pass is stefano -just a local run database

	-commands:
				- SHOW DATABASES;
				- CREATE DATABASE db_name;
				- USE db_name;
				- DROP DATABASE db_name;


				GRANT ALL PRIVILIEGES ON db_name.*			// .* that means all tables on database
				TO 'username'@'localhost'					//only accessible from same computer
				IDENTIFIED BY 'password';


				SHOW GRANTS FOR 'username'@'localhost';     // SHOW GRANTS FOR 'mainwid'@'localhost';

# Creating database table
=========================

		- SHOW TABLES;

		- CREATE TABLE table_name (
			column_name1 definition,
			column_name2 definition,
			column_name3 definition,
			options
		 );



		- SHOW COLUMNS FROM  table_name;

		- DROP TABLE table_name;



		-----------------------------------------------------------------------------
		layout for table that will hold subject areas:

			* subjects (a table called subjecs)

				* id (column for id - unique identifier and it's going to allow us to then say customer 27 or customer 34)
				* menu_name  (name of menu display onthe public side of the content management system)
				* position (that will let us change the sort order of those subjects)
				* visible ( a boolean true or false for whether the subject should be visible to the public - on the subject navigation
				  on top of website)



				  mysql> CREATE TABLE subjects(
				  		->	id INT(11) NOT NULL AUTO_INCREMENT,
				  		->  menu_name VARCHAR(30) NOT NULL,
				  		->  position INT(3) NOT NULL,
				  		->  visible TINYINT(1) NOT NULL,
				  		->  PRIMARY KEY (id)
				  );


				 SHOW TABLES;
				
				 SHOW COLUMNS FROM subjects;
				  

