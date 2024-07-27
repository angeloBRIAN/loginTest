<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guestList extends Model
{
    private static $guest_name = "Brian";

    public static function get_name()
    {
        return self::$guest_name;
    }
}
