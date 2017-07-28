<?php

namespace cqudefus\helpers;
/**
 * Created by PhpStorm.
 * User: berka
 * Date: 7/28/17
 * Time: 11:06 PM
 */
class Session {

    public static function add($key, $value) {
        self::startSession();

        if(is_array($_SESSION[$key])) {
            array_push($_SESSION[$key], $value);
        } else {
            $_SESSION[$key] = $value;
        }

    }

    public static function remove($key, $value) {
        self::startSession();

        if(is_array($_SESSION[$key])) {

            $index = array_search($value,$_SESSION[$key]);

            if($index !== false) {
                unset($_SESSION[$key][$index]);
            }

        }
    }

    public static function startSession() {
        if (!isset($_SESSION)) {
            session_start();
        }
    }
}
?>