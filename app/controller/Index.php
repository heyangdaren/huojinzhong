<?php 
	namespace app\controller;
	use core\View;
	use Gregwar\Captcha\CaptchaBuilder;

	class Index{
		// 首页展示的方法
		public function index(){
			// echo "hello";
			return View::make('index')->with('version','HD85');
		}
		// 登录页面
		public function login(){
			return View::make('login');
		}

		// 验证码
		public function code(){
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder;
        $builder->build();
        $builder->output();
    }
	}
 ?>