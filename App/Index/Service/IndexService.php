<?php
/**
 * Created by PhpStorm.
 * User: liwenzhi
 * Date: 2017/8/28
 * Time: 下午5:06
 */


namespace App\Index\Service;


use App\Index\Controller\BaseController;

class IndexService extends BaseController
{


    public function getList($params = []) {
        return [
            'a', 'b'
        ];
    }
}
