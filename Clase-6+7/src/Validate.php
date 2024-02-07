<?php 

namespace App;

class Validate 
{
    public static function email($value): bool {
        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function url($value): bool {
        return (bool) filter_var($value, FILTER_VALIDATE_URL);
    }

    public static function password($value){
        return (bool) preg_match('/^[a-z]{6,9}$/', $value);
    }
}