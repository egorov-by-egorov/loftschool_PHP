<?php

interface TariffInterface
{
    public function calculate(int $distance, int $time, int $age, bool $addGps = false);
}