<?php namespace Packtrack\Generator;

class GenerateService {
    public static function activation_key()
    {
        // Check of activation key al bestaat
        // Return unique key
        return static::random(45);
    }

    public static function random($length = 16)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
}