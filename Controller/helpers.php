<?php

/**
* ニュース一覧へのリンクなどを生成する関数が定義されたclass
*/
class helpers {

	private $sysRoot;
	private $helperModel;

	public $teamsClass;
	public $teamsName;
	public $teamsImg;

	function __construct($s) {
		$this->sysRoot = $s;

		require_once $this->sysRoot . '/Model/mysqlModel.php';
		require_once $this->sysRoot . '/Model/helperModel.php';

		$this->helperModel = new helperModel();

		// DBのteam番号に対応したチーム名とその画像
		$this->teamsClass = array('irc', 'hard', 'soft', 'web');
		$this->teamsName = array('IRC', "ハード班", "ソフト班", "ウェブ班");
		$this->teamsImg = array('images/irc.jpg', 'images/irc.jpg', 'images/irc.jpg', 'images/irc.jpg');
	}

	function newsLink()
	{
		$years = $this->helperModel->fetchYears();

		$code = '';

		for($i = 0; $i < count($years); $i++) {
			$code .= '<li><p class="triangle"><a href="/news/'. $years[$i]['year'] .'">' . $years[$i]['year'] . '年</a></p></li>';	
		}

		return $code;
	}

	function newestYear() {

		$newestYear = $this->helperModel->fetchNewestYear(); 

		return $newestYear;
	}
}