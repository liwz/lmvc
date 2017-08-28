<?php
/**
 * Created by PhpStorm.
 * User: liwenzhi
 * Date: 2017/8/28
 * Time: 下午4:25
 */

namespace App\Index\Controller;


use App\Index\Service\IndexService;

class IndexController extends BaseController
{

    public function index() {
        common_func();
        $c = \Config::get('liw');



        \Config::set('liw', time());

        $c = \Config::get('liw');

        $indexService = new IndexService();

        $data = $indexService->getList();
        return $data;
    }
}

