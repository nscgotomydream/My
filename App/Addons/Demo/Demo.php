<?php

namespace App\Addons\Demo;


class Demo {

    public function __construct(){
    }

    public function behaviors()
    {
        return [
            //����
            'profile'=>[
                'title'     => '���Բ��',
                'chr'       => 'demo',
                'description' => '���Բ��,�������е����̹���',
                'icon'      => 'php.png',
            ],

            'menu'=>[
                '0'=>[
                    'title' => '�û�����',
                    'uri'   => 'demo.index',
                ],
                '1'=>[
                    'title' => '�û��û��б�',
                    'uri'   => 'demo.index',
                ],
            ],
            //��׼����ӳ��
            'action'=>[
                'install'   => 'demo.uninstall',    //��װ����
                'uninstall' => 'demo.uninstall',
                'option'    => 'demo.index',
                'html'      => 'demo.html',     //html����
                'widget'    => 'demo.widget',   //wedget����
            ],

        ];

    }

}

/**
 * ͳһ����Ϊģʽ
 * ��װ
 * ж��
 * ����
 * ���ݲ�����ʾhtml
 * ���ݲ�����ʾwedget
 *
 */

