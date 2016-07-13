<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doIndex()
    {
        app('addons')->addons(\App\Addons\Demo\Demo::class)->router($_GET)->html();     //根据get进行路由,显示界面

        exit;

        //$shares 获取列表
        $shares =  Model('shares')->getList();
        view('',[
            'shares'    => $shares,
            'res'       => $res
        ]);
    }

}
