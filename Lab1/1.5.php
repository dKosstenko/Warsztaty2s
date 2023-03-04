<?php
	$figure = readline("Enter figure (triangle, trapezium, rectangle): ");

	switch ($figure) {
		 case "triangle":
			  $area = calculateTriangleArea();
			  echo "The area of the triangle is: " . $area . "\n";
			  break;
		 case "trapezium":
			  $area = calculateTrapeziumArea();
			  echo "The area of the trapezium is: " . $area . "\n";
			  break;
		 case "rectangle":
			  $area = calculateRectangleArea();
			  echo "The area of the rectangle is: " . $area . "\n";
			  break;
		 default:
			  echo "Invalid input. Please enter 'triangle', 'trapezium', or 'rectangle'.\n";
			  break;
	}

	function calculateTriangleArea() {
		$base = readline("Enter base of the triangle: ");
		$height = readline("Enter height of the triangle: ");
		$area = 0.5 * $base * $height;
		return $area;
  }
  
  function calculateTrapeziumArea() {
		$base1 = readline("Enter the first base of the trapezium: ");
		$base2 = readline("Enter the second base of the trapezium: ");
		$height = readline("Enter height of the trapezium: ");
		$area = 0.5 * ($base1 + $base2) * $height;
		return $area;
  }
  
  function calculateRectangleArea() {
		$length = readline("Enter length of the rectangle: ");
		$width = readline("Enter width of the rectangle: ");
		$area = $length * $width;
		return $area;
  }
  