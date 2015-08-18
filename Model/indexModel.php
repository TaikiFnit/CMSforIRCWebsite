<?php


/**
* 最新4件のニュースを抽出
*/
class indexModel extends mysqlModel {

	private $dbh;

	function __construct()
	{
		$this->dbh = $this->connectDB();
	}

	function run() {

		$sql = 'select `news_id`, `title`, date_format(`created`, "%Y") as year, `created`, `team`, `images`, `image_src1`, `image_alt1` from news order by created desc limit 4';

		$stmt = $this->dbh->prepare($sql);

		$stmt->execute();

		$this->dbh = null;

		return $stmt->fetchAll();
	}
}