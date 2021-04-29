<?php

$result = 0;
for ($x = 1; $x <= 50; $x++) {
    if ($x % 2 === 1) {
	$result += $x;
    }
}

echo $result . "\n";
