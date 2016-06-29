<?php
namespace App\Controller;


class Shares extends BaseController {

    public function __construct(){

        parent::__construct();
    }


    public function doSetPost()
    {
        Model('mygu')->set(req('Post'));
        $this->AjaxReturn([
            'code'=>200,
            'msg'=>'succeed',
            'js'=>'window.location.href="/shares/"'
        ]);
    }

    //设置
    public function doSet()
    {
        view('',[
            'res'=>Model('mygu')->get()
        ]);
    }

    //首页的
    public function doAdd()
    {
        //遍历下面有哪些目录
        view('',[
            // 'res'=>$res
        ]);
    }

    //首页的
    public function doIndex()
    {
        //遍历下面有哪些目录
        view('',[
            'res'=>$res
        ]);
    }


}
