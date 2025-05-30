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
// 5. задача
function power($val, $pow) {
    if ($pow == 0) {
        return 1;
    } elseif ($pow < 0) {
        return 1 / power($val, -$pow);
    } else {
        return $val * power($val, $pow - 1);
    }
}

echo "\n=== Возведение в степень ===\n";
echo "2^3 = ", power(2,3), "\n"; 
echo "5^-2 = ", power(5,-2), "\n"; 
// 6. задача
function getTimeWithDeclension() {
    date_default_timezone_set('Europe/Moscow'); 
    
    $hour = (int)date('G');   
    $minute = (int)date('i'); 
    
    function declOfNum($number, array $titles) {
        if ($number % 100 >= 11 && $number % 100 <= 14) {
            return $titles[2];
        } else {
            switch ($number % 10) {
                case 1:
                    return $titles[0];
                case 2:
                case 3:
                case 4:
                    return $titles[1];
                default:
                    return $titles[2];
            }
        }
    }

   $hourWord = declOfNum($hour, ['час', 'часа', 'часов']);
   $minuteWord = declOfNum($minute, ['минута', 'минуты', 'минут']);

   return "$hour {$hourWord} {$minute} {$minuteWord}";
}

echo "\n=== Текущее время с склонениями ===\n";
echo getTimeWithDeclension(), "\n";

?>