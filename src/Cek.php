<?php

namespace FebrianYudhis\GG;

class Cek
{
    public static function apakahGanjil($number)
    {
        if ($number % 2 != 0) {
            return true;
        }
    }

    public static function apakahGenap($number)
    {
        if ($number % 2 == 0) {
            return true;
        }
    }
}
