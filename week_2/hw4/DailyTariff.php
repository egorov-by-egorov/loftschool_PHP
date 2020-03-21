<?php

class DailyTariff extends Tariff
{
    use Driver;
    protected $kmPrice = 1;
    protected $minutePrice = 1000 / 1440;

    public function calculate($distance, $time, $age, $addGps = false, $addDriver = false)
    {
        $time = ceil($time / 1470);
        $time = ceil($time * 1440);

        $price = parent::calculate($distance, $time, $age, $addGps);
        if ($addDriver) {
            $price += $this->addDriver();
        }
        return $price;
    }
}