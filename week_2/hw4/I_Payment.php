<?php


    interface I_Payment
    {
        function calculation (int $distance, int $time, int $age, int $gps, int $driver);
    }