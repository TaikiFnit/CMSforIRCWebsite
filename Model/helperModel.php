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

	protected function execution($sql) {

		$stmt = $this->dbh->prepare($sql);

		$stmt->execute();

		return $stmt->fetchAll();
	}

	function fetchYears() {

		$sql = 'select date_format(`created`, "%Y") as year from news group by date_format(`created`, "%Y") order by created desc';

		return $this->execution($sql);	
	}

	function fetchNewestYear() {

		$sql = 'select max(date_format(`created`, "%Y")) as newestYear from news';

		return $this->execution($sql)[0]['newestYear'];
	}
}