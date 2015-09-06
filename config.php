<?php

// DB接続に必要な設定
define('DB_NAME', 'ircnews');
define('DSN', 'mysql:host=localhost;dbname=' . DB_NAME);
define('DB_USER', 'irc_user');
define('DB_PASSWORD', 'irc_password');

define('NEWS_IMAGE_PATH', '/news_image/');

error_reporting(E_ALL & ~E_NOTICE);
