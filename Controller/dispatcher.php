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

		// Controllerのインスタンス化
		switch($controller) {
			// index.html
			case 'index':
				require_once $this->sysRoot . '/Controller/indexController.php';
				//$controllerInstance = new indexController($this->sysRoot);
				break;
			// news一覧やnews
			case 'news':

				// news一覧へのアクセスか、newsへのアクセスかを切り替える

				if(0 < count($params[2])) {
					if(0 < count($params[3])) {
						// /news/20**/**へのアクセス
						require_once $this->sysRoot . '/Controller/newsController.php';
						$controllerInstance = new newsController($this->sysRoot, $params);
					}
					else {
						// news一覧へのアクセス
						require_once $this->sysRoot . '/Controller/newsListController.php';
						$controllerInstance = new newsListController($this->sysRoot, $params);
					}
				}
				else {
					// /news/　へのアクセス
					// 見たい年が入力されていないので強制的に最新のニュース一覧へリダイレクト	
					echo 'redirect';
				}

				break;
			default: 
				require_once $this->sysRoot . '/Controller/staticController.php';
				//$controllerInstance = new staticController(this->sysRoot, $params);
				break;
		}

		//$controllerInstance->run();
	}
}

