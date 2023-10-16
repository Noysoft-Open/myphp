<!Doctype HTML>
	
<html>
	
	<head>
		<title>Hello World!</title>
	</head>

	<body>
		
		<h2>Hello World</h2>
		
		<a href="/">Home</a><br>
		
		<?php
			/*
				This is a multi-line comments.
			*/
			// Single line comment.
			echo "<p>PHP block</p>";
			
			$txt = "Hello World!";
			$x = 10;
			$y = 10.5;

			echo "<p>" . $txt . "</p>";
			echo "<p>" . $x . "</p>";
			echo "<p>" . $y . "</p>";

			$txt = "w3schools.com";
			echo "<p>I love " . $txt . "!</p>";

			$x = 5;
			$y = 4;
			echo "<p>Adding two numbers: </p>";
			echo "<p>$x + $y = " . $x + $y . "</p>"; 

			$x = 5; // global
			function mytest($var)
			{
				echo "<p>Variable x inside function is: $var</p>";
			}
			mytest($x);
			echo "<p> Variable x outsize of function is: $x</p>";

			echo "<h2>PHP is Fun!</h2>";
			echo "Hello world!<br>";
			echo "I'm about to learn PHP!<br>";
			echo "This ", "string ", "was ", "made ", "with multiple parameters.";

			$txt1 = "Learn PHP";
			$txt2 = "w3schools.com";
			$x = 5;
			$y = 4;

			echo "<h2>" . $txt1 . "</h2>";
			echo "Study PHP at " . $txt2 . "<br>";
			echo $x + $y;

			/*
				Data Types
			*/

			// String
			$x = "Hello World!";
			$y = 'Hello world!';

			echo $x;
			echo "<br>";
			echo $y;

			echo "<br>";
			
			// Integer
			$x = 5985;
			var_dump($x);

			echo "<br>";
			
			// Float
			$x = 10.365;
			var_dump($x);

			// Boolean
			$x = true;
			$y = false;
			print $x;
			print $y;

			echo "<br>";

			// PHP Array
			$cars = array("Volvo", "BMW", "Toyota");
			print $cars[1];

			echo "<br>";

			// Object
			class Car{
				public $color;
				public $model;
				public function __construct($color, $model){
					$this->color = $color;
					$this->model = $model;
				}
				public function message(){
					return "My car is a " . $this->color . " " . $this->model . "!";
				}
			}

			$mycar = new Car("black", "volvo");
			echo $mycar -> message();
			echo "<br>";
			$mycar = new Car("red", "toyota");
			echo $mycar -> message();

			echo "<br>";

			// PHP NULL Value
			$x = "Hello world!";
			$x = null;
			var_dump($x);

			echo "<br>";

			// strlen()
			echo strlen("Hello world!");

			echo "<br>";
			echo str_word_count("Hello world!");

			echo "<br>";
			echo strpos("Hello world!", "world");

			echo "<br>";
			echo str_replace("world", "Jayson", "Hello world!");

			echo "<br>";
			echo strlen("I don't bother anyone.");

			echo "<br>";

			$x = 5985;
			echo is_int($x);

			echo "<br>";

			$y = 59.85;
			
			echo var_dump(is_int($y));

			// conditional operation
			if (is_int($y) == true){
				echo "TRUE";
			} else {
				echo "FALSE";
			}

			echo "<br>";

			// casting float to int
			$x = 23465.768;
			$int_cast = (int)$x;
			echo $int_cast;

			echo "<br>";

			// casting string to int
			$x = "23465.768";
			$int_cast = (int)$x;
			echo $int_cast;

			echo "<br>";
			echo(pi());

			echo "<br>";
			echo(min(0, 150, 30, 20, -8, -200));
			echo "<br>";
			echo(max(0, 150, 30, 20, -8, -200));

		?>

	</body>

</html>