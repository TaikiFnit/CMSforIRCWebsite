<?php

/**
* ニュース一覧を抽出
*/

class newsListModel extends mysqlModel
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

		$sql = 

		$stmt = $this->dbh->prepare($sql);

		$stmt->execute();

		$this->dbh = null;

		return $stmt->fetchAll();
	}
}