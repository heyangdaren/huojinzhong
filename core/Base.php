<?php 
	namespace core;
	class Base{
		// 模板文件变量
		protected $file;
		// 模板参数变量(protected $vars = array();)
		protected $vars = [];
		// 加载模板的方法
		public function make($file){
			// 例如需要引入的模板是view/index.php
			$this->file = "view/{$file}.php";
			return $this;
		}
		// 分配模板得变量方法
		public function with($name,$var){
			$this->vars[$name] = $var;
			return $this;
		}
		// 当在当前类的方法返回对象的时候自动触发
		public function __toString(){
			extract($this->vars);
			// 分配模板参数 extract 方法会将数组中的键名key变为变量名，键值value变为变量值
			// array(
			// 	'add'=>123
			// 	)
			// $add=123

			// 引入模板文件
			include $this->file;
			return '';
		}
	}
 ?>