<?php
// +----------------------------------------------------------------------
// | ThinkIMS [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2015-2019 http://www.thinkims.cn/ All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +---------------------------------------------------------------------
// | Author: dangyuzhang <2085@163.com>
// +----------------------------------------------------------------------   


namespace app\portal\controller;


use ims\controller\BaseController;
use think\facade\Request;

class ErrorController extends BaseController
{
    /** PC 端错误页面
     * @return mixed
     */
    public function index(){
        $msg = Request::get('msg','未知错误！');
        $this->assign('msg',$msg);
        return $this->fetch();
    }
}