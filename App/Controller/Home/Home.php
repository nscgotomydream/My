<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doIndex()
    {

        //$shares 获取列表
        $shares =  Model('shares')->getList();
        view('',[
            'shares'    => $shares,
            'res'       => $res
        ]);
    }

}
