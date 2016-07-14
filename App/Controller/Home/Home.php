<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doIndex()
    {
        $root = APPROOT.'Addons/';
        \App\Addons\Addons::Run();                         //运行
//or    \App\Addons\Addons::Start('demo.home.index',$params);               //运行






        exit;

        //$shares 获取列表
        $shares =  Model('shares')->getList();
        view('',[
            'shares'    => $shares,
            'res'       => $res
        ]);
    }

}
