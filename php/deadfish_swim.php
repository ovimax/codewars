<?php

/*

<6 kyu> Make the Deadfish Swim

Write a simple parser that will parse and run Deadfish.

Deadfish has 4 commands, each 1 character long:

i increments the value (initially 0)
d decrements the value
s squares the value
o outputs the value into the return array

Invalid characters should be ignored.

parse("iiisdoso") => [ 8, 64 ]
*/


function parse($data) {
	$data_array = str_split($data);
	$initial = 0;
	$response = [];
	foreach ($data_array as $key => $value) {
		switch ($value) {
			case 'i':
				$initial++;
				break;
			case 'd':
				$initial--;
				break;
			case 's':
				$initial = pow($initial, 2);
				break;
			case 'o':
				array_push($response, $initial);
				break;
			default:
				// code...
				break;
		}
	}
	return $response;
}

var_dump(parse("iiisdoso"));