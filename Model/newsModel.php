<?php

/**
* ニュース一覧を抽出
*/
class newsModel extends mysqlModel
{
	private $year;
	private $news_id;
	private $dbh;

	function __construct($y, $i)
	{
		$this->year = $y;
		$this->news_id = $i;

		$this->dbh = $this->connectDB();
	}

	function run() {

		$sql = 'select news_id, title, created, date_format(created, "%Y年%m月%d日") as jpcreated, content, author, images, image_src1, image_src2, image_alt1, image_alt2 from news where news_id = ' . $this->news_id . ' and date_format(created, "%Y") = ' . $this->year;

		return $this->execution($this->dbh, $sql)[0];
	}
}