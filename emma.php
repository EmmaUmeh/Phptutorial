<?php 

$is_TrueValid = true;
$is_FalseValid = false;
var_dump($is_FalseValid);
var_dump($is_TrueValid);

$amount = 100_000_000_000;
echo is_int($amount);

$floatNumber = 0.5;
echo($floatNumber);

$title = 'Emmanuel Umeh';
print($title);


$name = 'EmmaUmeh';
echo($name[-3]);
echo(strlen($name));
echo "$name Emmanuel";


$she = "She";
$he = "He";

$test = "$she said that \"Php is goood\" so $he agreed";

echo($test);


// Herodoc
$she = "She";
$he = "He";

$test = 
<<< TEXT
she said that "Php is goood enjoy" so $he agreed
TEXT
;

echo($test);



$email = "emma@gmail.com";

unset($email);
// echo($email);

$x = 10;
$y = 20;
$total = $x + $y;
echo($total);




$greeting = 'Hello ';
$name = 'John';

$greeting .= $name;

echo $greeting;

// shortcicurting
$debug = true;
$debug && print('PHP and operator demo!');


$is_admin = true;
$can_approve = true;

if ($is_admin) {
	echo 'Welcome, admin!';
	if ($can_approve) {
		echo 'Please approve the pending items';
	}
}

?>

