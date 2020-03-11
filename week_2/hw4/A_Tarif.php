<?php
    require_once 'I_Payment.php';

    abstract class A_Tarif implements I_Payment
    {
        protected $distancePrice;
        protected $timePrice;

        public function __construct()
        {
        }

        function calculation (int $distance, int $time, int $age, int $gps, int $driver) {
            if (!empty($gps) && $gps > 0 && $gps < 60) {
                $driver = 60;
            } elseif ($age >= 0 && $age <= 18 || $age > 65 ) {
                echo 'Вам запрещено использовать данный сервис.';
            }
            elseif ($driver) {
                $driver = 100;
            }

            $driver *= $this->timePrice;
            $result = ($distance * $this->distancePrice + $time * $this->timePrice);
        }

    }