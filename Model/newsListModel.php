<?php

/**
* ニュース一覧を抽出
*/
class newsListModel extends mysqlModel
{
	private $year;
	private $dbh;

	function __construct($y)
	{
		$this->year = $y;
		$this->dbh = $this->connectDB();
	}

	function run() {

		$sql = 'select `news_id`, `title`, `created`, date_format(created, "%Y年%m月%d日") as jpcreated, date_format(created, "%Y") as year, `team` from news where date_format(created, "%Y") = ' . $this->year . ' order by created desc';

		return $this->execution($this->dbh, $sql);
	}
}