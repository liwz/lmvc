<?php
/**
 * Created by PhpStorm.
 * User: liwenzhi
 * Date: 2017/8/28
 * Time: 下午5:18
 */


class Config
{
    static $conf = [];

    public static function get($key) {
        $key = trim($key);
        if (empty($key)) {
            return null;
        }
        if (empty(self::$conf)) {
            self::$conf = include ROOT . 'App/Common/conf/conf.php';
        }
        return isset(self::$conf[$key]) ? self::$conf[$key] : null;
    }

    public static function set($key, $val) {
        $key = trim($key);
        if (empty($key)) {
            return null;
        }
        self::$conf[$key] = $val;
        return true;

    }
}