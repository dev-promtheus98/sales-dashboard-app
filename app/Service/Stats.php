<?php

namespace App\Service;

class Stats
{
    public static function newOrders(): int
    {
        return rand(5, 100);
    }

    public static function salesAmount()
    {
        return rand(100, 1000);
    }

    public static function satisfactions()
    {
        return rand(95, 100);
    }
}
