# Constants (the opposite of variables) 

- cannot change
- capital letters
- no dollar sign in front of them
- the only way to set a value for a constant is to use a function

```
ex.
	<?php
	//this is a variable
	$max_width = 980;		

	//this is a contant. we use quotes to define it  
	define('MAX_WIDTH', 980);
	
	//but once defined we can just call it				
	echo MAX_WIDTH;			

	//can't change the value
	MAX_WIDTH += 1;
	echo MAX_WIDTH;

	//can't even be redefined
	define("MAX_WIDTH",982);
	echo MAX_WIDTH;

	?>
```


[Back](https://github.com/stefan22/phpIntro)
