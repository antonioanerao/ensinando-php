<?php

namespace App\Core;

class App {
    protected static array $registry = [];

    public static function bind($key, $value) {
        static::$registry[$key] = $value;
    }

    /**
     * @throws Exception
     */
    public static function get($key) {
        if(!array_key_exists($key, static::$registry)) {
            throw new Exception('No {key} is bound in the container');
        }

        return static::$registry[$key];
    }
}