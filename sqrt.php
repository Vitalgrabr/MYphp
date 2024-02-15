<?php
// Функция для проверки, является ли число простым
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Выводим все простые числа до 100
echo "Простые числа от 1 до 100:\n";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo "$i ";
    }
}
?>
