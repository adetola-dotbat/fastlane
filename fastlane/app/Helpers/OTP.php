<?php

namespace App\Helpers;

class OTP
{
    /**
     * Generate OTP
     * @return void
     */
    public static function generateOTP():int
    {
        $generate = str_repeat(mt_rand(00000,999999), 1);
        return substr($generate, 0, 5);
    }
}
