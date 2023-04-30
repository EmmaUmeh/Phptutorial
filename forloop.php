<?php

$total = 0;

for ($i = 1; $i <= 10; $i++) {
	$total += $i;
}

echo $total;

?>

<!-- OR -->

<?php

$total = 0;

for ($i = 1; $i <= 10; $i++):
	$total += $i;
endfor;

echo $total;

?>