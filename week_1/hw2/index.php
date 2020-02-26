<?php
require_once 'src/functions.php';
// Variables for testing
$arrTask1 = ['test1', 'test2','test3','test4','test5'];

// Functions
task1($arrTask1, false);

task2('/', 1, 2, 3, 5.2);

task3(8,8);

task4();

task5();

$file = fopen("test.txt", "w");
fwrite($file, 'Hello world');
fclose($file);

task6("test.txt");

//task7();

//task8();

//task9();

//task10();

