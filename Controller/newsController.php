<?php

class newsController extends helpers{

	private $sysRoot;
	private $helpers;
	private $year;
	private $news_id;

	function __construct($s, $p) {
		$this->sysRoot = $s;
		$this->year = $p[2];
		$this->news_id = $p[3];
		$this->helpers = new helpers($this->sysRoot);
	}
	
	function run() {

		require_once $this->sysRoot . '/Model/mysqlModel.php';

		require_once $this->sysRoot . '/Model/newsModel.php';

		$newsModel = new newsModel($this->year, $this->news_id);

		$newsData = $newsModel->run();

		if(!empty($newsData)) {
			// データが存在

			require_once $this->sysRoot . '/Controller/templateController.php';

			$imageAreaCode = '';

			for($i = 0; $i < $newsData['images']; $i++) {
				$imageAreaCode .= '<img src="' . $newsData['image_src' . ($i + 1)] . '" alt="' . $newsData['image_alt' . ($i + 1)] . '" class="newsImg">';
			}

			$tpl = new templateController($this->sysRoot);

			$tpl->news_id = $newsData['news_id'];
			$tpl->title = $newsData['title'];
			$tpl->created = $newsData['created'];
			$tpl->jpcreated = $newsData['jpcreated'];
			$tpl->content = $newsData['content'];
			$tpl->author = $newsData['author'];
			$tpl->year = $this->year;
			$tpl->newsLink = $this->helpers->newsLink();
			$tpl->imageArea = $imageAreaCode;

			$tpl->show($this->sysRoot . '/View/news.php');
		}
		else {
			// データが存在しない
			// So, redirect
			header('Location: /news/');
		}
	}
}