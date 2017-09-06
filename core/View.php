<?php 
	namespace core;
	class View{
		// 如果实例化当前类，使用‘->’方式调用的方法找不到的时候，自动触发
		public function __call($name, $arguments){
			return self::parseAction($name,$arguments);
		}
		// 如果实例化当前类，使用‘::’方式调用的方法找不到的时候，自动触发
		// ::为静态方法的调用
		public static function __callStatic($name, $arguments){
			return self::parseAction($name,$arguments);
		}

		public static function parseAction($name,$arguments){
			// 通过该方法实例化Base类，调用对应方法
			return call_user_func_array([new Base(),$name], $arguments);
		}
	}
 ?>