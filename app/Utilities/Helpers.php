<?php
namespace App\Utilities;

/**
 * Created by ponorogocreativeit@gmail.com
 * Phone (SMS & Whatsapp) : 0853-3435-3789
 * Date: 1/20/18
 * Time: 6:52 PM
 **/
class Helpers{
    public static function formatCurrency($number = 0, $unit = '', $isSuffixUnit = false, $decimal = 0){
        if ($isSuffixUnit) {
            return number_format($number, $decimal, ',', '.').' '.$unit;
        } else {
            return $unit.' '.number_format($number, $decimal, ',', '.');
        }
    }
}