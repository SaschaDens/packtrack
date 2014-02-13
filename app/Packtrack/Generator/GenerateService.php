<?php namespace Packtrack\Generator;

class GenerateService {
    public static function activation_key()
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // Check of activation key al bestaat
        // Return unique key
        return static::random($pool, 20);
    }

    public static function tracking_key()
    {
        $prepool = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $afterpool = '0123456789';
        // Check of activation key al bestaat
        // Return unique key
        return '4P' . static::random($prepool, 5) . static::random($afterpool, 6);
    }

    public static function random($pool, $length = 16)
    {
        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
}