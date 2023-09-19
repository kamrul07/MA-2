<?php
// taks 1

function findEven($num) {

    if ($num % 2 == 0 && $num != 0) {
        echo "$num is an even number \n";
    }
}
function forLoop(int $min, int $max, callable $even) {
    echo "This is For loop \n";
    for ($i = $min; $i <= $max; $i += 2) {
        $even($i);
    }
}

function whileLoop(int $min, int $max, callable $even) {
    echo "This is While loop \n";
    while ($min <= $max) {
        $even($min);
        $min += 2;
    }
}
function doWhileLoop(int $min, int $max, callable $even) {
    echo "This is do while loop \n";
    do {
        $even($min);
        $min += 2;
    } while ($min <= $max);
}

function process(int $min, int $max, callable $loop) {
    $loop($min, $max, "findEven");
}

process(0, 20, "forLoop");
process(0, 20, "doWhileLoop");
process(0, 20, "doWhileLoop");







// task 2


function fiftynumbers() {
    for ($i = 1; $i <= 50; $i++) {

        if ($i % 5 == 0) {
            continue;
        }
        echo $i . "\n";
    }
}
fiftynumbers();

//task 3
function breakMethod(int $num1, int $num2) {

    for ($i = 0; $i < 10; $i++) {

        echo $num1 . "\n";
        $newNumber = $num1 + $num2;
        $num1 = $num2;
        $num2 = $newNumber;

        if ($newNumber > 100) {
            break;
        }
    }
}
breakMethod(0, 1);


// Task 4


function Fibonacci($num1, $num2, $limit) {
    static $start;
    $start = $start ?? 0;
    if ($start > $limit) {
        return;
    }
    $start++;

    $newNumber = $num1 + $num2;
    echo "$num1 \n";
    $num1 = $num2;
    $num2 = $newNumber;

    Fibonacci($num1, $num2, $limit);
}

Fibonacci(0, 1, 15);