<?php
if (isset($_GET['submit'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];

    // handle-calculate.php
    function calc(int|float $x, string $operator, int|float $y): int|float
    {
        switch ($operator) {
            case 'add':
                return $x + $y;
                break;
            case 'sub':
                return $x - $y;
                break;
            case 'mul':
                return $x * $y;
                break;
            case 'div':
                return $x / $y;
                break;
        }
    }
    $result = calc($num1, $operator, $num2);
    header("location: calculate.php?result=$result"); //"? xxx = yyy" ---> Query string
} else {
    header('location: calculate.php');
}
