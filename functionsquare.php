<?php
// Функция для вычисления квадрата числа
function square($number) {
    return $number * $number;
}

// Функция для определения четности числа
function isEven($number) {
    return $number % 2 === 0;
}

// Функция для нахождения факториала числа
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Функция для генерации случайного числа в заданном диапазоне
function generateRandomNumber($min, $max) {
    return rand($min, $max);
}

// Функция для конвертации температуры из Цельсия в Фаренгейт
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

// Функция для объединения двух строк
function concatenateStrings($str1, $str2) {
    return $str1 . $str2;
}

// Функция для проверки является ли строка палиндромом
function isPalindrome($str) {
    $str = strtolower(str_replace(' ', '', $str));
    return $str == strrev($str);
}

// Функция для вывода текущей даты
function getCurrentDate() {
    return date('Y-m-d');
}

// Пример использования функций
echo "Квадрат числа 5: " . square(5) . "\n";
echo "Число 10 четное: " . (isEven(10) ? 'Да' : 'Нет') . "\n";
echo "Факториал числа 4: " . factorial(4) . "\n";
echo "Случайное число от 1 до 100: " . generateRandomNumber(1, 100) . "\n";
echo "Температура 25°C в Фаренгейтах: " . celsiusToFahrenheit(25) . "\n";
echo "Объединение строк: " . concatenateStrings("Hello, ", "World!") . "\n";
echo "Является ли 'level' палиндромом: " . (isPalindrome('level') ? 'Да' : 'Нет') . "\n";
echo "Текущая дата: " . getCurrentDate() . "\n";
?>
