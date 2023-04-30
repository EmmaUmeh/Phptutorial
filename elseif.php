<?php

$x = 10;
$y = 20;

if ($x > $y) {
	$message = 'x is greater than y';
} elseif ($x < $y) {
	$message = 'x is less than y';
} else {
	$message = 'x is equal to y';
}

echo $message;

?>

<!-- OR -->

<?php

$x = 10;
$y = 20;

if ($x > $y) :
	$message = 'x is greater than y';
elseif ($x < $y):
	$message = 'x is less than y';
else:
	$message = 'x is equal to y';
endif;

echo $message;

?>


<?php

$role = 'subscriber';
$message = '';

if ('admin' === $role) {
	$message = 'Welcome, admin!';
} elseif ('editor' === $role) {
	$message = 'Welcome! You have some pending articles to edit';
} elseif ('author' === $role) {
	$message = 'Welcome! Do you want to publish the draft article?';
} elseif ('subscriber' === $role) {
	$message = 'Welcome! Check out some new articles.';
} else {
	$message = 'Sorry! You are not authorized to access this page';
}

echo $message;

?>