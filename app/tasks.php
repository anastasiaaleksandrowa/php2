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
// 2. задача
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'add':
            return calculate($arg1, $arg2, '+');
        case 'subtract':
            return calculate($arg1, $arg2, '-');
        case 'multiply':
            return calculate($arg1, $arg2, '*');
        case 'divide':
            return calculate($arg1, $arg2, '/');
        default:
            return "Неизвестная операция";
    }
}
// 3. зададча
$regions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Сасово']
];

echo "=== Области и города ===\n";
foreach ($regions as $region => $cities) {
    echo "$region: " . implode(', ', $cities) . "\n";
}
echo "\n";
