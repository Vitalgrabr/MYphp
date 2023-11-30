<?php
// Определение функции, возвращающей квадрат числа
function square($number) {
    return $number * $number;
}

// Определение функции, возвращающей сумму двух чисел
function add($a, $b) {
    return $a + $b;
}

// Определение функции, выводящей приветствие
function greet($name) {
    echo "Привет, $name!";
}

// Примеры использования функций
$result = square(5);
echo "Квадрат числа 5: $result\n";

$sum = add(3, 7);
echo "Сумма чисел 3 и 7: $sum\n";

greet("Иван");
?>
