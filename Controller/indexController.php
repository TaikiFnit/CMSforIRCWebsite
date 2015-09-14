<?php

class indexController extends helpers{

	private $sysRoot;

	function __construct($s) {
		$this->sysRoot = $s;
		$this->helpers = new helpers($this->sysRoot);
	}

	function run() {

		require_once $this->sysRoot . '/Model/mysqlModel.php';

		require_once $this->sysRoot . '/Model/indexModel.php';

		$indexModel = new indexModel();

		$newsData = $indexModel->run();

		// newsDataを利用してcodeを生成

		for($i = 0; $i < count($newsData); $i++) {

			$imgPath = '';

			if(0 < $newsData[$i]['images']) {
				// 画像が存在する
				// So, display it.

				$imgPath = $newsData[$i]['image_src1'];
			}
			else {
				// 画像が存在しない
				// teamによって表示させる画像を切り替える

				$imgPath = $this->helpers->teamsImg[$newsData[$i]['team']];
			}

			$code = '';

			// split for php5.2
			$code .= '<li><a href="/news/';
			$code .= $newsData[$i]['year'];
			$code .= '/';
			$code .= $newsData[$i]['news_id'];
			$code .= '">';

			$code .= '<div><img src="' . NEWS_IMAGE_PATH . $imgPath . '" alt="Alt"></div>';

			// split for php5.2
			//$code .= '<p>' . $newsData[$i]['jpcreated'] . ' / ' . $this->helpers->teamsName[$newsData[$i]['team']] . '</p>';

			$code .= '<p>';
			$code .= $newsData[$i]['jpcreated'];
			$code .= ' / ';
			$code .= $this->helpers->teamsName[$newsData[$i]['team']];
			$code .= '</p>';

			$code .= '<p>' . $newsData[$i]['title'] . '</p>';

			$code .= '</a></li>';
		}

		require_once $this->sysRoot . '/Controller/templateController.php';

		$tpl = new templateController($this->sysRoot);

		$tpl->newsList = $code;

		$tpl->show($this->sysRoot . '/View/index.php');
	}
}