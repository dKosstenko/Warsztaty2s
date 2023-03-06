<?php 
	function printMultiplicationTable($n) {
		for ($i = 1; $i <= $n; $i++) {
			 for ($j = 1; $j <= $n; $j++) {
				  echo $i * $j . " ";
			 }
			 echo "<br>";
		}
  }
  
  printMultiplicationTable(5);