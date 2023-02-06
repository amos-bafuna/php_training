<?php
$value = 1.3;
$my_array = [1, 2, 3, 4];
$super_arr = ['a' => 2, 'b' => 4, 'c' => 6];

if (is_int($value)) {
    echo 'The value is an integer';
}
else {
    echo 'The value is not an integer' . "\n";
}

unset($my_array[2]);
echo implode($my_array);

echo "\n\n\n";
echo $super_arr['b'];

echo "\n\n";

// Opérateur à fusion null

//$action = $_POST['action'] ?? 'default';

if (isset($_POST['action'])) {
    return $action = $_POST['action'];
}
else {
    $action = 'default';
}

// Loops 

$i = 0;
while ($i <= 10) {
    echo 'While loop: The value of i is: ' . $i . "\n";
    $i++;
}

for ($a=0; $a < 5; $a++) { 
    echo 'For loop: The value of a is: ' . $a . "\n";
}

$arr = [2, 4, 6];
foreach($arr as $value){
    $value = $value * 2;
    echo $value;
    echo "\n";
}

echo $action;
?>