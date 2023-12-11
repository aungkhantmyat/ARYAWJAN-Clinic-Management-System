<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$mystring="I say, nay, nay and thrice nay!";
	echo substr_count($mystring, "nay")."<br/>";
	echo substr_count($mystring, "nay",9)."<br />";
	$myString="Hello, world!";
	echo strpbrk($myString, "abcdef")."<br>";
	echo strpbrk($myString, "xyz")."<br>";
	$username="matt@example.com";
	if(strpbrk($username, "@!"))
	{
		echo "@ and ! are not allowed in username"."<br>";
	}

	$Mystring="Hello, world!";
	echo substr($Mystring,0,5)."<br>";
	echo substr($Mystring,7)."<br>";
	echo substr($Mystring,-1)."<br>";
	echo substr($Mystring,-5,-1)."<br>";

	$myString1="It was the best of times, it was the worst of times";
	echo str_replace("times", "bananas", $myString1);
	$myString1="It was the best of times, it was the worst of times";
	echo str_replace($myString1, "bananas", 11)."<br>";
//	echo str_replace($myString1, "bananas", 19,5)."<br>";

 ?>
</body>
</html>