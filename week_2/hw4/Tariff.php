<?php

abstract class Tariff implements TariffInterface
{
    use Gps;

    protected $kmPrice = 0;
    protected $minutePrice = null;
    protected $minAge = 18;
    protected $maxAge = 65;

    public function calculate($distance, $time, $age, $addGps = false)
    {
        if ($this->checkAge($age) === false) {
            echo 'Неподходящий возраст';
            return 0;
        }
        $price = ($distance * $this->kmPrice) + ($time * $this->minutePrice) + $this->getAgeCoef($age);
        if ($addGps) {
            $price += $this->addGps($time);
        }
        return $price;
    }

    protected function checkAge($age)
    {
        return $age >= $this->minAge && $age <= $this->maxAge;
    }

    protected function getAgeCoef($age)
    {
        return $age >= 18 || $age <= 21 ? 1.1 : 1;
    }
}