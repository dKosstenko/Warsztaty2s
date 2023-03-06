<?php
	function getElementAtIndex($arr, $index) {
		if ($index >= 0 && $index < count($arr)) {
			 return $arr[$index];
		} else {
			 return null;
		}
  }

  $arr = array(453, 22235, 2137, 2324, 228);
$index = 2;
$element = getElementAtIndex($arr, $index);
echo "The element at index $index is: $element\n";