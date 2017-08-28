<?php
/**
 * Created by PhpStorm.
 * User: liwenzhi
 * Date: 2017/8/28
 * Time: 下午4:25
 */

namespace App\Index\Controller;


use App\Index\Service\IndexService;

class IndexController
{

    public function index() {
        common_func();
        $c = \Config::get('liw');


        var_dump($c);

        \Config::set('liw', time());

        $c = \Config::get('liw');
        var_dump($c);

        $indexService = new IndexService();

        $data = $indexService->getList();
        return $data;
    }
}

