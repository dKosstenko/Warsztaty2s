<?php
	function rollDice($numRolls) {
		$results = array();
		for ($i = 0; $i < $numRolls; $i++) {
			 $results[] = mt_rand(1, 6);
		}
		return $results;
  }