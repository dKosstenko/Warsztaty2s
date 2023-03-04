<?php
	function extractBirthdayFromPesel($pesel) {
		// Extract the year, month, and day from the PESEL
		$year = substr($pesel, 0, 2);
		$month = substr($pesel, 2, 2);
		$day = substr($pesel, 4, 2);
	   return "$day-$month-$year";
	}

	$pesel = "900228187213";
	echo "$pesel";

	echo extractBirthdayFromPesel($pesel);