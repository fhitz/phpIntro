#Pages that have forms for submiting form data
==============================================

	URL/Links	===>	GET

	Forms		===> 	POST

	Cookies		===>	COOKIE

	$_GET => with $_GET PHP took all of the request parameters and put them into an associative array for the superglobal $_GET

	$_POST => all the values posted in the form data will be in that associative array $_POST, ready for us to access (just like we
			  did with the links)

	When we submit forms, there's generally going to be two pages, one page which has the web form on it, ready to be filled out.
	And the second page which has the processing of the form

	-To view the values submitted by the form with POST, in the form_processing.php page do

			//this gives you the associative array (key-value pairs)
			<pre>
				print_r($_POST);
			</pre>

			//you could also do something like this:

			$username = $_POST["useranme"];


#Detecting Form Submission
==========================
	- we can retrieve values from a form when a form is submitted, but if URL was loaded directly, instead of being submitted by
	  the form, then the key values that were expected to be in the POST array weren't there.

	  To solve that:

	  			<?php
					//it also sets default values of empty if its not set
					if (isset($_POST["username"])) {
						
						$username = $_POST["username"];
					
					} else {
						$username = "";
					}

					if (isset($_POST["password"])) {
						$password = $_POST["password"];
					} else {
						$password = "";
					}


					echo "Username: {$username}<br /> Password: {$password}";
			

				?>

				//same thing using a ternary operator
				// boolean_test ? value_if_true : value_if_false
				$username = isset($_POST["username"]) ? $_POST["username"] : "";
				$password = isset($_POST["password"]) ? $_POST["password"] : "";

				echo "{$username}: {$password}";


				//another way-better

				<?php
					if (isset($_POST["submit"])) {
						echo "form was submitted";
					}
				?>


#Single Page form processing
============================

	- Advantages:
					- All logic related to the form is in one line
					- Redisplay the form on errors
						- Return error messages
						- Populate fields with previous values


#Validating Form Values
=======================

	- When we accept data from users especially from web forms(submit), we don't wanna accept just any
	  data, in fact as developers is our job to assume users are sending us the worst data possible or
	  even trying to hack our site so
	  Checking the submitted data carefully is the way to having secure and robust code

	- So we need to spend some time thinking about requirements for our data and learning how to
	  enforce those requirements

	- Imposing data requirements is called "validating our data"

	##Common Validations
	====================

		- Presence => making sure some data have been sent
		- String length => a certain number of characters
		- Type => make sure is string, integer or a float
		- Inclusion in a set => that it's included in a set from a select set of choices
			ex. if we ask for male or female, expecting the answer to be either or
		- Uniqueness => checks whether something is unique or not (databases)
		- Format => checking for a $ when currency, email @ symbol, dates and times




























		
		

#Validation Values
==================

	- Imposing data requirements is called validating our data

		##Common Validations:

				- Presence				- simplest and most common requirement for a form field is that user submits some value
										  and form field cannot be left blank. Presence of a value.	

				- String length			- number of characters that they've submitted - longer than certain amount of characters or not shorter than
				 						  a certain amount of characters	

				- Type					- make sure user sent us a string or an integer or a float if that's what we're expecting

				- Inclusion in a set	- included in a set from a select set of choices, so if we ask someone to choose from male or female, the anwer
										  we would expect to get back would be either male or female

				- Uniqueness			- whether something is unique or not (databases- ie: everyone needs to pick a unique username)

				- Format				- making sure an email has the at symbol in it, currency has the pound or dollar sign, might need to
										  end up with am and pm etc



#Problems with Validation Logic
===============================

	- Type juggling during comparissons

			- string vs null: converts null to ""
			- boolean vs other: converts other to boolean
			- number vs other: converts other to number



	- empty() function 

			- these are all considered to be empty:

					- ""
					- 0
					- "0"
					- null
					- false
					- array()


#Displaying Validation Errors
=============================

	- How to display validation errors back to the user

			- best way to do that is to have $errors equal an array, and then we can put our errors
			  in this array and let them accumulate
			  		$errors = array();

			 - once we're done running all our validations, we can decide what we want to do with it.


#Custom Validation Functions
============================

	- Rather than using if statements, functions allow us to make our validations re-usable
	- we can then develop a file, that is going to be a library of validation functions that we
	  can just include and call upon whenever needed.






















*   [Back](https://github.com/stefan22/phpIntro)




























































