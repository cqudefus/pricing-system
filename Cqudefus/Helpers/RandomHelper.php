<?php

namespace cqudefus\helpers;
/**
 * Created by PhpStorm.
 * User: berka
 * Date: 7/28/17
 * Time: 11:06 PM
 */
class Rand
{

    public static function uniqueDigit()
    {
        return mt_rand(100000, 999999);
    }


}

?>