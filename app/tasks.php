<?php
// 1. задача
function calculate($a, $b, $operation) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "Деление на ноль!";
            }
            return $a / $b;
        default:
            return "Неизвестная операция";
    }
}
