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
    $operator = trim($argList[0]);
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
                $expression .= $value . ' + ';
                $result += $value;
            }
            $expression = rtrim($expression, "+ ");

            echo $expression . ' = ' . $result;
            break;
        case '-':
            foreach ($argList as $value) {
                $expression .= $value . ' - ';
                $result -= $value;
            }
            $expression = rtrim($expression, "- ");
            echo $expression . ' = ' . $result;
            break;
        case '*':
            foreach ($argList as $value) {
                if ($result === NULL) {
                    $result = $value ;
                }
                $expression .= $value . ' * ';
                $result *= $value ;
            }
            $expression = rtrim($expression, "* ");
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
                $expression .= $value . ' / ';
                $result /= $value;
            }
            $expression = rtrim($expression, "/ ");
            echo $expression . ' = ' . $result;
            break;
        default:
            echo 'Оператор не поддерживается';
    }
};

//  Функция должна принимать два параметра – целые числа.
//  Если в функцию передали 2 целых числа, то функция должна отобразить таблицу умножения размером со значения параметров, переданных в функцию. (Например если передано 8 и 8, то нарисовать от 1х1 до 8х8). Таблица должна быть выполнена с использованием тега <table>
//  В остальных случаях выдавать корректную ошибку.
function task3(int $rowLimit = 0, int $colLimit = 0)
{
    if ($rowLimit % 2 === 0 && $colLimit % 2 === 0 && $rowLimit === $colLimit) {
        echo '<table border="1"cellspacing="0" style="margin: 50px auto 0 auto;">',
            '<thead>',
			'<tr>';
                for ($headCol=0; $headCol <= $rowLimit; $headCol++):
                	echo "<th style='background-color:#ccc;padding: 5px;text-align: center;'>$headCol</th>";
                endfor;
			echo '</tr>',
			'</thead>',
			'<tbody>';
	            for ($row=1; $row <= $rowLimit; $row++):
			        echo '<tr>',
				        "<td style='background-color:#ccc;padding: 5px;text-align: center;'>$row</td>";
			            for ($col=1; $col <= $colLimit; $col++):
							echo'<td style="padding: 5px;text-align: center;">';
                                echo $row * $col;
							echo '</td>';
			            endfor;
			        echo '</tr>';
	            endfor;
			echo '</tbody>',
	'</table>';
    } else {
        echo "Аргументы должны быть чётными числами и равны друг-другу!";
    }
};

//  Выведите информацию о текущей дате в формате 31.12.2016 23:59
//  Выведите unixtime время соответствующее 24.02.2016 00:00:00.
function task4()
{
    echo date('d.m.Y H:i') . '<br>';
    echo date("d.m.Y H:i:s", mktime(0, 0, 0, 02, 24, 2016)) . '<br><br>';
};

//  Дана строка: “Карл у Клары украл Кораллы”. Удалить из этой строки все заглавные буквы “К”.
//  Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”. По желанию дополнить задание.
function task5()
{
    $str1 = 'Карл у Клары украл Кораллы';
    $str2 = 'Две бутылки лимонада';
    echo str_replace('К', '', $str1) . '<br>';
    echo str_replace('Две', 'Три', $str2) . '<br><br>';
};

//  Создайте файл test.txt средствами PHP.
//  Поместите в него текст - “Hello again!” Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.
function task6(string $nameFile)
{
    $file = fopen($nameFile, "r");
    echo fgets($file);
    fclose($file);
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