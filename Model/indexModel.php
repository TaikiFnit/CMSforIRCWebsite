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

		$sql = 'select `news_id`, `title`, date_format(`created`, "%Y") as year, `created`, date_format(`created`, "%Y年%m月%d日") as jpcreated,  `team`, `images`, `image_src1`, `image_alt1` from news order by created desc limit 4';

		return $this->execution($this->dbh, $sql);	
	}
}