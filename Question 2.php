<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even_filter = function($number) {
    return $number % 2 === 0;
};

$even_numbers = array_filter($numbers, $even_filter);

print_r($even_numbers);
?>

