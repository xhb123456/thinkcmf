<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
namespace app\portal\controller;

use cmf\controller\HomeBaseController;
use think\Request;
class IndexController extends HomeBaseController
{
    public function index()

    {

        return $this->fetch(':login');
    }

    public function login(){
         $request = request();
    	 $captcha = $request->param();    	
		 if (cmf_captcha_check($captcha)) {
			exit(json_encode(array('code'=>200,'msg'=>$captcha)));
		 } else {
		 	exit(json_encode(array('code'=>4,'msg'=>$captcha)));
		 }
    }
}
