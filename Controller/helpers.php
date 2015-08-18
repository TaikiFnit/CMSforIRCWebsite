<?php

/**
* ニュース一覧へのリンクなどを生成する関数が定義されたclass
*/
class helpers
{
	private $sysRoot;

	function __construct($s) {
		$this->sysRoot = $s;
	}

	function newsLink()
	{
		require_once $this->sysRoot . '/Model/mysqlModel.php';
		require_once $this->sysRoot . '/Model/helperModel.php';

		$helperModel = new helperModel();

		$years = $helperModel->fetchYears();

		$code = '';

		for($i = 0; $i < count($years); $i++) {
			$code .= '<li><p class="triangle"><a href="/news/'. $years[$i]['year'] .'">' . $years[$i]['year'] . '年</a></p></li>';	
		}

		return $code;
	}
}