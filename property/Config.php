<?php

/*
Example use:
Like in singleton, but use static get/set/exists method instead of directly on variables
*/

class Config
{
    private static Array $conf = array();

    public static function get(string|int $name) : mixed
    {
        return self::$conf[$name];
    }


    public static function set(string|int $name, mixed $value)
    {
        self::$conf[$name] = $value;
    }


    public static function exists(string|int $name) : bool
    {
        return isset(self::$conf[$name]);
    }
}

Config::set("language", "pl");
Config::set("login", "test");

echo Config::get("language")."<br/>";
Config::set("language", "en");
var_dump(Config::exists("language"));