<?php

// このクラスではリクエストに応じて使用するコントローラーのインスタンス化を行います

class dispatcher {

	private $sysRoot;

	function __construct($s) {
		$this->sysRoot = $s;
	}

	function run() {

		// 末端の / を削除
		if($_SERVER['REQUEST_URI'] != null) {
			$param = rtrim($_SERVER['REQUEST_URI'], '/');
		}

		$params = array();	

		// パラメータを /　で分割
		if($param != '') {
			$params = explode('/', $param);
		}

		$controller = 'index';

		// controller名をセット
		if(0 < count($params)) {
			$controller = $params[1];
		}

		$controller = basename($controller, '.html');
		$controller = basename($controller, '.php');

		var_dump($params);

/*
		// Controllerのインスタンス化
		switch($controller) {
			// index.html
			case 'index':
				require_once $this->sysRoot . '/Controller/indexController.php';
				$controllerInstance = new indexController($this->sysRoot);
				break;
			// news一覧やnews
			case 'news':
				require_once $this->sysRoot . '/Controller/newsController.php';
				$controllerInstance = new newsController($this->sysRoot, $_SERVER['REQUEST_METHOD'], $params);
				break;
			default: 
				require_once $this->sysRoot . '/Controller/staticController.php';
				$controllerInstance = new staticController(this->sysRoot, $params);
				break;
		}

		$controllerInstance->run();
		*/
	}
}

