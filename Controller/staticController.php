<?php

// staticなhtmlファイルを表示させるためのクラス
class staticController {

	private $sysRoot;

	function __construct($s) {
		$this->sysRoot = $s;
	}

	function run() {
		// TODO
		// もし、渡されたファイル名のファイルが存在すればそれをreadfile, else notFoundをreadfile
		readfile($this->sysRoot . '/View/index.html');

	}
}