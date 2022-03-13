<?php
$test=$_GET["test"];
$testfileDecoded=urldecode($test);
if(strpos($test, '..') !== false) { 
	echo "With simple path traversal detection I found '..'";
} else {
	echo "<hr></br>";
	echo file_get_contents($testfileDecoded);
}
echo "<hr></br>";
echo "Parameter testfileDecoded: $testfileDecoded";
