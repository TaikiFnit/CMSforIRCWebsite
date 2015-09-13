<?php

// すべてのリクエストがこのファイルに集中し、ここでリクエスト振り分けクラスのインスタンス化を行います
$sysRoot = dirname(dirname(__FILE__));
echo $sysRoot;

include $sysRoot . '/config.php';

include $sysRoot . '/Controller/dispatcher.php';


$dispatcher = new dispatcher($sysRoot);
$dispatcher->run();