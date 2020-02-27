<?php

function task1(array $strings, bool $concat = false)
{
    if ($concat) {
        return implode(',', $strings) . '<br>';
    } else {
        foreach ($strings as $string) {
            echo '<p>'.$string.'</p>';
        }
    }
};

function task2(string $operator, ...$numbers)
{
    $numbers = array_filter($numbers, function($value) {
        return is_numeric($value) !== false;
    });

    $operator = trim($operator);
    $expression = implode($operator, $numbers);
    $result = NULL;
    foreach ($numbers as $number) {
        switch ($operator) {
            case '+':
                $result += $number;
                break;
            case '-':
                $result -= $number;
                break;
            case '*':
                if ($result === NULL) {
                    $result = $number;
                }
                $result *= $number ;
                break;
            case '/':
                    if ($number === 0 ) {
                        echo 'На ноль делить нельзя';
                        die();
                    } elseif ($result === NULL) {
                        $result = $number ;
                    }
                    $result /= $number;
                break;
            default:
                echo 'Оператор не поддерживается';
        }
    }
    echo $expression . ' = ' . $result;
};

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

function task4()
{
    echo date('d.m.Y H:i') . '<br>';
    echo date("d.m.Y H:i:s", mktime(0, 0, 0, 02, 24, 2016)) . '<br><br>';
};

function task5()
{
    $str1 = 'Карл у Клары украл Кораллы';
    $str2 = 'Две бутылки лимонада';
    echo str_replace('К', '', $str1) . '<br>';
    echo str_replace('Две', 'Три', $str2) . '<br><br>';
};

file_put_contents("test.txt", 'Hello world');
function task6(string $nameFile)
{
    file_get_contents("test.txt");
};
