<?php

// すべてのリクエストがこのファイルに集中し、ここでリクエスト振り分けクラスのインスタンス化を行います
$sysRoot = dirname(dirname(__FILE__));

require_once $sysRoot . '/config.php';

require_once $sysRoot . '/Controller/dispatcher.php';

$dispatcher = new dispatcher($sysRoot);
$dispatcher->run();