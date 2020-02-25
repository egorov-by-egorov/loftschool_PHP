<?php

//  Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
//  Если в функцию передан второй параметр true, то возвращать (через return) результат в виде одной объединенной строки.
function task1(array $strings, bool $concat = false)
{
    if ($concat) {
        return implode(',', $strings);
    } else {
        foreach ($strings as $string) {
            echo '<p>'.$string.'</p>';
        }
    }
};

//  Функция должна принимать переменное число аргументов.
//  Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие, которое необходимо выполнить со всеми передаваемыми аргументами.
//  Остальные аргументы это целые и/или вещественные числа.
function task2()
{
    $argList = func_get_args();
    (string) $operator = $argList[0];
    unset($argList[0]);
    $expression = '';
    $result = NULL;

    foreach ($argList as $value) {
        if (gettype($value) !== 'integer' && gettype($value) !== 'double' ) {
            return FALSE;
        }
    }

    switch ($operator) {
        case '+':
            foreach ($argList as $value) {
                $expression .= $value . '+';
                $result += $value;
            }
            echo $expression . ' = ' . $result;
            break;
        case '-':
            foreach ($argList as $value) {
                $expression .= $value . '-';
                $result -= $value;
            }
            echo $expression . ' = ' . $result;
            break;
        case '*':
            foreach ($argList as $value) {
                if ($result === NULL) {
                    $result = $value ;
                }
                $expression .= $value . '*';
                $result *= $value ;
            }
            echo $expression . ' = ' . $result;
            break;
        case '/':
            foreach ($argList as $value) {
                if ($value === 0 ) {
                    echo 'На ноль делить нельзя';
                    die;
                } elseif ($result === NULL) {
                    $result = $value ;
                }
                $expression .= $value . '/';
                $result /= $value;
            }
            echo $expression . ' = ' . $result;
            break;
        default:
            echo 'Оператор не поддерживается';
    }
};

//  Функция должна принимать два параметра – целые числа.
//  Если в функцию передали 2 целых числа, то функция должна отобразить таблицу умножения размером со значения параметров, переданных в функцию. (Например если передано 8 и 8, то нарисовать от 1х1 до 8х8). Таблица должна быть выполнена с использованием тега <table>
//  В остальных случаях выдавать корректную ошибку.
function task3(int $num1 = 0, int $num2 = 0)
{
    if ($num1 % 2 === 0 && $num2 % 2 === 0) {
        echo '';
    } else {
        echo "нужно передать положительные числа";
    }
};
function task4()
{

};
function task5()
{

};
function task6()
{

};
function task7()
{

};
function task8()
{

};
function task9()
{

};
function task10()
{

};