<?php
$numbers = [1, 2, 3, 4, 5];

$square_function = function($number) {
    return $number * $number;
};

$squared_numbers = array_map($square_function, $numbers);


print_r($squared_numbers);

?>
