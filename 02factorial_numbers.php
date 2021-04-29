<?php
function factorialOfNumber($n)
{
    $result = $n;
    for ($x = $n - 1; $x > 0; $x--) {
	$result *= $x;
    }
    return $result;
}

echo factorialOfNumber(10);
?>

