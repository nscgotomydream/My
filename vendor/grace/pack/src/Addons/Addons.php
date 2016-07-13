<?php

namespace Grace\Addons;

/*
//调用方式

//方法
app('addons')->addons('demo')->install();       //安装
app('addons')->addons('demo')->uninstall();     //卸载

//界面部件
app('addons')->addons('demo')->router($_GET)->widget();     //根据get进行路由,显示界面
app('addons')->addons('demo')->Help();                      //显示帮助界面

//脚手架   -- 统一界面 - addons总线通知
app('addons')->addons('demo')->router($_GET)->html();     //根据get进行路由,显示界面

//页面内容包含
- 帮助
- 首页
- 设置页
- 其他

//---------------------------------------------
//参数定义
//控制器
ao="demo.auth.mcr"
//参数 加前缀addons_
ao.c=vvver&ao.d=asdfasdf
//这样来跟其他的参数进行区分



*/


class Addons{ // class start

    private $addons     = NULL;     //or hook

    private $type       = 'addons';     //or hook
    private $behaviors  = array();     //入口地址,url
    //-----------------------------------
    //下面属性从behaviors中获取
    private $title      = '';           //
    private $description= '';           //
    private $icon       = '';           //
    private $menu       = '';           //菜单栏定义

    private $install    = '';           //install 程序
    private $uninstall  = '';           //unstall 程序
    private $option     = '';           //设置 程序
    private $entrancehtml   = '';       //html入口
    private $entrancejson   = '';       //widget入口
    private $router     = '';           //路由处理程序
    //-----------------------------------

    public function __construct($config = array()){
        $this->_config  = $config;
        $this->root     = $config['root'];
    }

    /**
     * @param string $addonsname
     * 实例化插件对象,定义行为
     * 获取规范数据
     * title
     * description
     * icon
     * menu
     * install
     * uninstall
     * option
     * @return $this
     */
    public function addons($addonsname = ''){
        //获取addons的behaviors进行定义
        $this->addons = new $addonsname();
        $this->behaviors = $this->addons->behaviors();
        return $this;
    }

    public function router($get = ''){
        $this->_get = $get;
        return $this;
    }


    //=======================================================
    //定义完毕之后就可以进行各项方法的访问
    //=======================================================


    //-----------------------------------
    //方法
    //-----------------------------------
    //安装
    public function install(){
    }

    //卸载
    public function uninstall(){
    }


    //-----------------------------------
    //页面    //显示帮助界面
    //-----------------------------------
    public function help(){
    }

    /**
     * 根据路由结果显示html界面
     */
    public function html(){
        echo 'html';
    }



}
