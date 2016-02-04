<?php
$a=(14);
$b=(8);
$c=(5);

echo 'a='.$a.'cm , b='.$b.'cm and c='.$c.'cm';

if ($a < $b + $c && $b < $a + $c && $c < $a + $b) {
	echo "<p>The triangle</p>";
} else {
	echo "<p>This is not triangle</p>";
}
?>