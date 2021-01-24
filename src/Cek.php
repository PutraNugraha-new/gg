<?php

namespace FebrianYudhis\GG;

class Cek
{
    public static function apakahGanjil($number)
    {
        if(is_numeric($number)){
            if ($number % 2 != 0) {
                return true;
            }
        }
        
    }

    public static function apakahGenap($number)
    {
        if(is_numeric($number)){
            if ($number % 2 == 0) {
                return true;
            }
        }
    }
}
