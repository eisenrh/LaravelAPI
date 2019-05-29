$S = [2, 1, 6, 9, 9, 4, 3];

$unique_numbers = array_unique($S);

sort($unique_numbers);

$second_big_number = $unique_numbers[count($unique_numbers - 2)];

echo $second_big_number;