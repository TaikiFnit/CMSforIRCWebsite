<?php

// staticなhtmlファイルを表示させるためのクラス
class staticController {

	private $sysRoot;
	private $params;

	function __construct($s, $p) {
		$this->sysRoot = $s;
		$this->params = $p;
	}

	function run() {
		
		// もし、渡されたファイル名のファイルが存在すればそれをreadfile, else notFoundをreadfile

		require_once $this->sysRoot . '/Controller/templateController.php';

		$tpl = new templateController($this->sysRoot);

		$filePath = $this->sysRoot . '/View/' . $this->params[1];

		if(file_exists($filePath)) {
			// ファイルが存在

			$tpl->show($filePath);
		}
		else {
			// notFoundを送信	
			header('HTTP/1.0 404 Not Found');

			echo "よんぜろよん	　のっとふぁうんど";
		}
	}
}