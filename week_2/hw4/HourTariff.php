<?php

class HourTariff extends Tariff
{
    use Driver;

    protected $minutePrice = 200 / 60;

    public function calculate($distance, $time, $age, $addGps = false, $addDriver = false)
    {
        $time = ceil($time / 60);
        $time = ceil($time * 60);

        $price = parent::calculate($distance, $time, $age, $addGps);
        if ($addDriver) {
            $price += $this->addDriver();
        }
        return $price;
    }
}