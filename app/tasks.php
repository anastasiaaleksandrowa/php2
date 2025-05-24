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
// 4. задача
$map = [
    'а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e',
    'ё'=>'yo','ж'=>'zh','з'=>'z','и'=>'i','й'=>'y','к'=>'k',
    'л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r',
    'с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'ts',
    'ч'=>'ch','ш'=>'sh','щ'=>'shch','ъ'=>"'",'ы'=>'y',
    'ь'=>"'",'э'=>'e','ю'=>'yu','я'=>'ya'
];

function transliterateString($str) {
    global $map;
    $result = '';
    for ($i=0; $i<mb_strlen($str); $i++) {
        $char = mb_substr($str,$i,1);
        $lowerChar = mb_strtolower($char);
        if (isset($map[$lowerChar])) {
            if (mb_strtoupper($char)==$char) {
                $result .= mb_strtoupper($map[$lowerChar]);
            } else {
                $result .= $map[$lowerChar];
            }
        } else {
            $result .= $char;
        }
    }
    return $result;
}

echo "\n=== Транслитерация строки ===\n";
echo transliterateString("Привет мир!"), "\n";