<?php
require 'autoloader.php';

echo "Тариф Базовый: 4 км, 30 минут, 30 лет<br>";
$tariff = new BasicTariff();
echo $tariff->calculate(4,30, 30).'<br>';

echo "Тариф суточный: 4 км, 60 минут, 60 лет<br>";
$tariff = new DailyTariff();
echo $tariff->calculate(4,60, 60).'<br>';

echo "Тариф почасовой: 4 км, 30 минут, 30 лет<br>";
$tariff = new HourTariff();
echo $tariff->calculate(4,30, 30).'<br>';

echo "Тариф студенческий: 4 км, 30 минут, 20 лет<br>";
$tariff = new StudentTariff();
echo $tariff->calculate(4,30, 20).'<br>';
