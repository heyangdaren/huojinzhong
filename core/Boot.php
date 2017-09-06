<?php 
	namespace core;
	class Boot{
		public static function run(){
			self::apprun();
		}
		// 框架运行的方法
		public static function apprun(){
			// 利用地址栏GET参数对类和方法进行分配
			if (isset($_GET['c'])) {
				// 获得地址栏里传过来的参数（以字符串的形式传递过来的，所以当要解析为类和方法的时候。）
				// p($_GET['c']);
				// 需要用explode函数，将字符串切割为数组，然后再进行类和方法的分配
				$info = explode('/', $_GET['c']);
				// p($info);
				// 定义控制器的变量，利用数组的特点（ucfirst）将首字母变为大写，存入$c中
				$c = ucfirst($info[0]);
				// 定义方法的变量，并存入$a中
				$a = $info[1];
			}else{
				// 当地址栏里的参数不存在的时候，就定义默认类和方法
				$c = 'Index';
				$a = 'index';
			}
			// 组合控制器
			$class = "app\controller\\{$c}";
			// 实例化$class,并调用$a方法
			echo call_user_func_array([new $class,$a], []);
		}
	}
 ?>