<?php
function primeOfNumbers(int $n)
{
    $front_results = array();
    $back_results = array();
    $len = sqrt($n);
    for ($x = 1; $x <= $len; $x++) {
	if ($n % $x === 0) {
	    array_push($front_results, $x);
	    if ($len !== (float)$x ) {
		array_unshift($back_results, $n / $x);
	    }
	}
    }
    return array_merge($front_results, $back_results);
}

echo date("Y/m/d H:i:s") . "\n";
$nums = [7, 71, 15, 41, 1173, 36, 10000000000000];
foreach ($nums as $num) {
    echo "$num : " . join(", ", primeOfNumbers($num)) . "\n";
}
echo date("Y/m/d H:i:s"). "\n";
?>
