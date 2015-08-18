<?php

// このクラスではリクエストに応じて使用するコントローラーのインスタンス化を行います

class dispatcher {

	private $sysRoot;
	private $helpers;

	function __construct($s) {
		$this->sysRoot = $s;

		require_once $this->sysRoot . '/Controller/helpers.php';

		$this->helpers = new helpers($this->sysRoot);
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

		// Controllerのインスタンス化
		switch($controller) {
			// index.html
			case 'index':
				require_once $this->sysRoot . '/Controller/indexController.php';
				$controllerInstance = new indexController($this->sysRoot);
				break;
			// news一覧やnews
			case 'news':
				// news一覧へのアクセスか、newsへのアクセスかを切り替える

				if(count($params[2]) == 0) {
					// /news/　へのアクセス
					// So, 最新のニュース一覧を返す
					$params[2] = $this->helpers->newestYear();
				}

				// /news/**へのアクセス
				if(count($params[3]) == 0) {
					// news一覧へのアクセス
					require_once $this->sysRoot . '/Controller/newsListController.php';
					$controllerInstance = new newsListController($this->sysRoot, $params);
				}
				else {
					// /news/20**/**へのアクセス
					require_once $this->sysRoot . '/Controller/newsController.php';
					$controllerInstance = new newsController($this->sysRoot, $params);
				}

				break;
			default: 
				require_once $this->sysRoot . '/Controller/staticController.php';
				$controllerInstance = new staticController($this->sysRoot, $params);
				break;
		}

		$controllerInstance->run();
	}
}

