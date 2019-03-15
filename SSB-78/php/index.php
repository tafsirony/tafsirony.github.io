<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>php practice</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>My first PHP page</h1>

	<?php
	echo "<h1>case sensivity</h1>";
		echo "Hello world"."<br>";
		ecHo "Hello world"."<br>";
	echo "<h1>variables</h1>";	
		$a = 5+5;
		echo $a;
		echo "<br>";
		echo "Hello World $a " .$a. " everyone";



echo "<h1>data type</h1>";
$x = 5; // global scope
echo "<br>";
var_dump($x); 
$y = 4.6;
var_dump($y);
echo "<h1>local & gloabl variables</h1>";
function myTest() {
	global $x;
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";

echo "<h1>php string length</h1>";
echo strlen("hello");
echo "<h1>string word count</h1>";
echo str_word_count("hello");
echo "<h1>string position</h1>";
echo strpos("Jemi is a pilot", "is");
echo "<h1>string replace</h1>";
echo str_replace("Jemi", "pilot", "Jemi is a pilot");
echo "<h1>php constant</h1>";
define("Greeting", "Let's learn PHP");
echo Greeting;
echo "<h1>php constant array</h1>";
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];
echo "<br>";
echo "<h1>php form</h1>";
	$result= null;	
	if (isset($_POST['btn'])) {
		# code...
		$num1 = $_POST['firstno'];
		$num2 = $_POST['secondno'];
		$result = $num1+$num2;
		//echo "Summation is: ".$result;
	}

	


	?>
<form action="<?php echo $_SERVER['PHP_SELF'];?> " method="POST" >
	<input type="text" name="firstno" placeholder="1st no">
	<input type="text" name="secondno" placeholder="2nd no">
	<button type="submit" name="btn">Click</button>
	<div>
		<?php
			echo "Summation is: ".$result;
		?>
	</div>
</form>
</body>
</html>