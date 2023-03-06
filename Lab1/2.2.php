<?php
	function getNationality($country) {
		$nationalities = array(
			 "USA" => "American",
			 "Canada" => "Canadian",
			 "Mexico" => "Mexican",
			 "Brazil" => "Brazilian",
			 "France" => "French",
			 "Germany" => "German",
			 "Poland" => "Pole",
			 "Ukraine" => "Ukrainian",
			 "Italy" => "Italian",
			 "Spain" => "Spanish",
			 "China" => "Chinese",
			 "Japan" => "Japanese",
			 "Korea" => "Korean",
			 "India" => "Indian",
			 "Australia" => "Australian",
			 "Russia" => "Kurwa",
		);
		
		if (array_key_exists($country, $nationalities)) {
			 return $nationalities[$country];
		} else {
			 return "Unknown nationality";
		}
  }
  
  $country = "Japan";
  $nationality = getNationality($country);
  echo "If you're from $country, you're probably $nationality.\n";
  