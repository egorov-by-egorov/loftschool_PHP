<?php
//  Создайте массив $bmw с ячейками:
//  model
//  speed
//  doors
//  year
//  Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”.
//  Создайте массивы $toyota и $opel аналогичные массиву $bmw (заполните данными).
//  Объедините три массива в один многомерный массив.
//  Выведите значения всех трех массивов в виде:

    $bmw = ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => 2015];
    $toyota = ['model' => 'Prado', 'speed' => 200, 'doors' => 5, 'year' => 2019];
    $opel = ['model' => 'Astra OPC', 'speed' => 260, 'doors' => 3, 'year' => 2018];

    $car ['bmw'] = $bmw;
    $car ['toyota'] = $toyota;
    $car ['opel'] = $opel;

    echo '<pre>'.print_r($car['toyota'], 1).'</pre>';
