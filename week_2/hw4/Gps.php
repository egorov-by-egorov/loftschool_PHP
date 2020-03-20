<?php

trait Gps
{
    private function addGps($time)
    {
        $hours = ceil($time / 60);
        return $hours * 15;
    }
}