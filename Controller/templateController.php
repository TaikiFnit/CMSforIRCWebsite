<?php

/**
* view template
*/
class templateController
{
	private $sysRoot;
	private $filePath;

	function __construct($s) {
		$this->sysRoot = $s;
	}

	function show($filePath)
	{
		$this->filePath = $filePath;

		// 引数として受け取った連想配列を変数として展開
		extract((array)$this);	

		// 引数として受け取ったファイルを展開	
		include($this->sysRoot . '/View/template.php');
	}
}