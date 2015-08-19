<?php

class newsListController extends helpers{

	private $sysRoot;
	private $year;
	private $helpers;

	function __construct($s, $p) {
		$this->sysRoot = $s;
		$this->year = $p[2];

		$this->helpers = new helpers($this->sysRoot);
	}
	
	function run() {

		require_once $this->sysRoot . '/Model/mysqlModel.php';

		require_once $this->sysRoot . '/Model/newsListModel.php';

		$newsListModel = new newsListModel($this->year);

		$newsData = $newsListModel->run();

		if(!empty($newsData)) {
			// データが存在

			$code = '';

			for($i = 0; $i < count($newsData); $i++) {

				$code .= '<li><a href="/news/' . $newsData[$i]['year'] . '/' . $newsData[$i]['news_id'] . '">';

				$code .= '<div>';

				$code .= '<p><time datetime="' . $newsData[$i]['created'] . '">' . $newsData[$i]['jpcreated'] . '</time></p>';

				$code .= '<p><span class="' .TEAMSCLASS[$newsData[$i]['team']] . '">' . TEAMSNAME[$newsData[$i]['team']] . '</span></p>';

				$code .= '</div>';

				$code .= '<p class="newstitle">' . $newsData[$i]['title'] . '</p>';

				$code .= '</a></li>';
			}

			require_once $this->sysRoot . '/Controller/templateController.php';

			$tpl = new templateController($this->sysRoot);

			$tpl->newsList = $code;
			$tpl->year = $this->year;
			$tpl->newsLink = $this->helpers->newsLink();

			$tpl->show($this->sysRoot . '/View/newsList.php');
		}
		else {
			// データが存在しない
			// So, redirect
			header('Location: /news/');
		}
	}
}