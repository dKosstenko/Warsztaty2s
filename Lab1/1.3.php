<?php

$words = array("lorem", "ipsum", "ad", "ic", "sit", "amet", "consectetur", "adipiscing", "elit");
function censoreString($text) {
	global $words;
    foreach ($words as $word) {
        $text = str_ireplace($word, str_repeat('*', strlen($word)), $text);
    }
    return $text;
}

$string = "Lorem ipsum dolor sit amet, consectetur ipiscing elit, sed do eiusmod tempor";
echo "Initial string:\n$string\n\n";

echo censoreString($string);
