<?php
	function isPrime($n) {
		$counter = 0;
		
		if ($n <= 2) {
			 $counter++;
			 return $n == 2;
		}
		
		for ($i = 3; $i <= sqrt($n); $i += 2) {
			 $counter++;
			 if ($n % $i == 0) {
				  return false;
			 }
		}
		
		echo "Number of loop iterations: $counter\n";
		return true;
  }

  isPrime(31);