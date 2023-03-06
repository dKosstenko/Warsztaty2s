<?php 
function generateRandomIntegers($size) {
	$randomIntegers = array();
	for ($i = 0; $i < $size; $i++) {
		 $randomIntegers[] = rand();
	}
	return $randomIntegers;
}

$array = generateRandomIntegers(10);

function largestNumberForLoop($arr) {
	$largest = $arr[0];
	$count = count($arr);
	for ($i = 1; $i < $count; $i++) {
		 if ($arr[$i] > $largest) {
			  $largest = $arr[$i];
		 }
	}
	return $largest;
}

function largestNumberWhileLoop($arr) {
	$largest = $arr[0];
	$count = count($arr);
	$i = 1;
	while ($i < $count) {
		 if ($arr[$i] > $largest) {
			  $largest = $arr[$i];
		 }
		 $i++;
	}
	return $largest;
}

function largestNumberDoWhileLoop($arr) {
	$largest = $arr[0];
	$count = count($arr);
	$i = 1;
	do {
		 if ($arr[$i] > $largest) {
			  $largest = $arr[$i];
		 }
		 $i++;
	} while ($i < $count);
	return $largest;

echo largestNumberForLoop($array);      
echo largestNumberWhileLoop($array);    
echo largestNumberDoWhileLoop($array);  
echo largestNumberForeachLoop($array); 