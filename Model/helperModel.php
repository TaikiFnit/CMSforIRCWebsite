<?php


/**
* ニュース一覧を抽出 for link
*/
class helperModel extends mysqlModel {

	private $dbh;

	function __construct()
	{
		$this->dbh = $this->connectDB();
	}

	function fetchYears() {

		$sql = 'select date_format(`created`, "%Y") as year from news group by date_format(`created`, "%Y") order by created desc';

		$stmt = $this->dbh->prepare($sql);

		$stmt->execute();

		$this->dbh = null;

		return $stmt->fetchAll();
	}
}