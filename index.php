<?php
$test=$_GET["test"];
if(strpos($test, '..') !== false) {
	echo "found '..'";
	exit;
}
$testfileDecoded=urldecode($_GET['test']);
echo "---</br>";
echo file_get_contents($testfileDecoded);
