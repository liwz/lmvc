<?php
/**
 * Created by PhpStorm.
 * User: liwenzhi
 * Date: 2017/8/28
 * Time: 下午4:07
 */

class LMvc
{
    const defaultMain = 'index';


    static function run() {


        $requestStr = $_SERVER['REQUEST_URI'];

        if (strtolower(substr($requestStr, 0, 10)) === '/index.php') {
            $arr = explode('/', $requestStr);
            array_shift($arr);
            array_shift($arr);
        } elseif ($requestStr == '/') {
            $arr = [];
        } else {
            $arr = explode('/', $requestStr);
            array_shift($arr);
        }
        $cnt = count($arr);
        for ($i = 0; $i < 3 - $cnt; $i++) {
            $arr[] = self::defaultMain;
        }

        $appName = $arr[0];
        $controllerName = $arr[1];
        $strAction = $arr[2];
        $cl = '\\App\\' . $appName . '\\Controller\\' . $controllerName . 'Controller';
        spl_autoload_register(function ($class) {
            if ($class) {
                $file = str_replace('\\', '/', $class);
                $file = ROOT . $file . '.php';
                if (file_exists($file)) {
                    include $file;
                }
            }
        });
        $res = (new $cl)->{$strAction}();

    }
}
