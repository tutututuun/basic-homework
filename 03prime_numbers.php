<?php
function primeOfNumbers(int $n)
{
    $front_results = array();
    $back_results = array();
    $len = sqrt($n);
    for ($x = 1; $x <= $len; $x++) {
	if ($x === 1) {
	    continue;
	}
	if ($n % $x === 0) {
	    return false;
	}
    }
    return true;
}

echo date("Y/m/d H:i:s") . "\n";
$nums = [7, 71, 15, 41, 1173, 36, 10000000000000];
foreach ($nums as $num) {
    if (primeOfNumbers($num)) {
	echo "$num is prime number." . "\n";
    } else {
	echo "$num is not prime number." . "\n";
    }
}
echo date("Y/m/d H:i:s"). "\n";
?>
