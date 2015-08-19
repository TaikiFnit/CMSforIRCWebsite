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

		return $this->execution($this->dbh, $sql);	
	}

	function fetchNewestYear() {

		$sql = 'select max(date_format(`created`, "%Y")) as newestYear from news';

		return $this->execution($this->dbh, $sql)[0]['newestYear'];
	}
}